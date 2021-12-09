<?php
	require('../../classes/session.php');
	require('../../config/database.php');
	require('../../model/model.php');
	require('../../classes/validation.php');

	$post_value = [
		["email","required"],
		["pass","required"],
		["cpass","required:password"],
	];

	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header("location:../resetpassword.php?msg=".$validate->isError()."");
	}
	else{
		$<?php
	require('../../classes/session.php');
	require('../../config/database.php');
	require('../../model/model.php');
	require('../../classes/validation.php');

	$post_value = [
		["email","required"],
		["pass","required"],
		["cpass","required:password"],
	];

	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header("location:../resetpassword.php?msg=".$validate->isError()."");
	}
	else{
		$db = new Model();
		$where = "email='".$_REQUEST['email']."'";
		$get_email = $db->select("users","email",$where);

		if($get_email['count'] < 1){
			header("location:../register.php?msg=register first.");
			exit();
		}

		if($_REQUEST['pass'] != $_REQUEST['cpass']){
			header("location:../resetpassword.php?msg=You have to type the same password twice.");
			exit();
		}

		$cpass = md5($_REQUEST['cpass']);
		$col_data = ["pass" => $cpass];

		$where = "email='".$_REQUEST['email']."'";
		$user_pass = $db->update("users",$col_data,$where);

		if($user_pass){
			Session::init();
			Session::setValue("email",$_REQUEST['email']);
			header("location:../../index.php");
		}
		else {
			header("location:../resetpassword.php?msg=Update failed.");
		}
	}
?>