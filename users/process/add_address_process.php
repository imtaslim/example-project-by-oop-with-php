<?php
	require('inc.php');
	

	$post_value = [
		["address","required"],
		["city","required"],
		["postal","required"],
		["country","required"]<?php
	require('inc.php');
	

	$post_value = [
		["address","required"],
		["city","required"],
		["postal","required"],
		["country","required"],
		["phone","required"],
		["b_address","required"],
		["b_city","required"],
		["b_postal","required"],
		["b_country","required"],
		["b_phone","required"],
	];

	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header("location:../add_address.php?msg=".$validate->isError()."");
	}
	else{
		$where = "email='".Session::getValue("email")."'";

		$db = new Model();
		$getAddress = $db->select("address","*",$where);

		$col_data = [
			"address" => $_REQUEST['address'],
			"city" => $_REQUEST['city'],
			"postal" => $_REQUEST['postal'],
			"country" => $_REQUEST['country'],
			"phone" => $_REQUEST['phone'],
		];

		$upd_data = [
			"b_address" => $_REQUEST['b_address'],
			"b_city" => $_REQUEST['b_city'],
			"b_postal" => $_REQUEST['b_postal'],
			"b_country" => $_REQUEST['b_country'],
			"b_phone" => $_REQUEST['b_phone'],
		];
		$add_data = [
			"email" => Session::getValue("email"),
			"b_address" => $_REQUEST['b_address'],
			"b_city" => $_REQUEST['b_city'],
			"b_postal" => $_REQUEST['b_postal'],
			"b_country" => $_REQUEST['b_country'],
			"b_phone" => $_REQUEST['b_phone'],
		];

		if($getAddress['count'] > 0){
			
			$user_data = $db->update("users",$col_data,$where);
			$user_data = $db->update("address",$upd_data,$where);
			if($user_data){
				header("location:../../cart.php");
			}
			else {
				header("location:../add_address.php?msg=failed.");
			}
		}
		else{
			$address_data = $db->update("users",$col_data,$where);
			$address_data = $db->insert("address",$add_data);
			if($address_data){
				header("location:../../cart.php");
			}
			else {
				header("location:../add_address.php?msg=failed.");
			}
		}
		
		
	}
?>