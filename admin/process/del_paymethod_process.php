<?php
require('inc.php');

$post_value = [
	["pay_id","required"]
];
$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_paymethod.php?msg=".$validate->isError()."");}
else{
	$db = new Model();
	$where = "pay_id='".$_REQUEST['pay_id']."'";
	$db->delete("paymethod",$where);

	header("location:../all_paymethod.php?msg=deleted");
}                            <?php
require('inc.php');

$post_value = [
	["pay_id","required"]
];
$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_paymethod.php?msg=".$validate->isError()."");}
else{
	$db = new Model();
	$where = "pay_id='".$_REQUEST['pay_id']."'";
	$db->delete("paymethod",$where);

	header("location:../all_paymethod.php?msg=deleted");
}