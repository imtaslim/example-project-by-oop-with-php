<?php
require('inc.php');

$post_value = [
	["pay_method","required"]
];

$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../add_payMethod.php?msg=".$validate->isError()."");
}
else{
	$db = new Model();
	$where = "pay_method='".$_REQUEST['pay_method']."'";
	$get_pay = $db->select("paymethod","pay_method",$where);
	if($get_pay['count'] > 0){
		header("location:../add_payMethod.php");
	}
	else{
		if($db->insert("paymethod",$_POST)){
			header("location:../all_payMethod.php");
		}
		else{
			header("location:../add_payMethod.php");
		}
	}	
}                           <?php
require('inc.php');

$post_value = [
	["pay_method","required"]
];

$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../add_payMethod.php?msg=".$validate->isError()."");
}
else{
	$db = new Model();
	$where = "pay_method='".$_REQUEST['pay_method']."'";
	$get_pay = $db->select("paymethod","pay_method",$where);
	if($get_pay['count'] > 0){
		header("location:../add_payMethod.php");
	}
	else{
		if($db->insert("paymethod",$_POST)){
			header("location:../all_payMethod.php");
		}
		else{
			header("location:../add_payMethod.php");
		}
	}	
}