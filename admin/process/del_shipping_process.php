<?php
require('inc.php');

$post_value = [
	["sid","required"]
];
$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_shipping.php?msg=".$validate->isError()."");}
else{
	$db = new Model();
	$where = "sid='".$_REQUEST['sid']."'";
	$db->delete("shipping",$where);

	header("location:../all_shipping.php?msg=deleted");
}                                                                                                                   <?php
require('inc.php');

$post_value = [
	["sid","required"]
];
$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_shipping.php?msg=".$validate->isError()."");}
else{
	$db = new Model();
	$where = "sid='".$_REQUEST['sid']."'";
	$db->delete("shipping",$where);

	header("location:../all_shipping.php?msg=deleted");
}