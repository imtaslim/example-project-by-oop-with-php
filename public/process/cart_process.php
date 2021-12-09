<?php
require("inc.php");
require("status_checker.php");

$arg = [
	["pid","required"],
	["qty","required"]
];
$validate = new Validation($arg);

// check validation
if($validate->isError()){
	header("location:../../index.php?msg=".$validate->isError()."");
}
else{

	$db = new Model();
	$where = "pid='".$_REQUEST['pid']."'";
	$get_data = $db->select("products","p_name,p_price",$<?php
require("inc.php");
require("status_checker.php");

$arg = [
	["pid","required"],
	["qty","required"]
];
$validate = new Validation($arg);

// check validation
if($validate->isError()){
	header("location:../../index.php?msg=".$validate->isError()."");
}
else{

	$db = new Model();
	$where = "pid='".$_REQUEST['pid']."'";
	$get_data = $db->select("products","p_name,p_price",$where);
	if($get_data['count'] > 0){
		$_POST['u_email'] = Session::getValue('email');
		$_POST['p_name'] = $get_data['rows'][0]['p_name'];
		$_POST['p_price'] = $get_data['rows'][0]['p_price'];
		$_POST['price_total'] = $get_data['rows'][0]['p_price'] * $_POST['qty'];

		if($db->insert("cart",$_POST)){
			header("location:../../index.php?msg=Product Added");
		}
		else{
			header("location:../../single_product.php?pid=".$_POST['pid']."");
		}
	}
	else{
		header("location:../../index.php?msg=failed");
	}	
}