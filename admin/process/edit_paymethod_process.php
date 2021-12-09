<?php
require('inc.php');

$post_value = [
	["pay_id","required"],
	["pay_method","required"]
];
$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_payMethod.php?msg=".$validate->isError()."");
}
else{
	$db = new Model();
	$where = "pay_id='".$_REQUEST['pay_id']."'";
	$paymethod = $db->update("paymethod",$_POST,$where);

	header("location:../all_payMethod.<?php
require('inc.php');

$post_value = [
	["pay_id","required"],
	["pay_method","required"]
];
$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_payMethod.php?msg=".$validate->isError()."");
}
else{
	$db = new Model();
	$where = "pay_id='".$_REQUEST['pay_id']."'";
	$paymethod = $db->update("paymethod",$_POST,$where);

	header("location:../all_payMethod.php");
}