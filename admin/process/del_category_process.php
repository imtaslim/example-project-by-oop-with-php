<?php
require('inc.php');

$post_value = [
	["cid","required"]
];
$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_categories.php?msg=".$validate->isError()."");}
else{
	$db = new Model();
	$where = "cid='".$_REQUEST['cid']."'";
	$db->delete("categories",$where);
	$db->delete("products",$where);

	header(<?php
require('inc.php');

$post_value = [
	["cid","required"]
];
$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_categories.php?msg=".$validate->isError()."");}
else{
	$db = new Model();
	$where = "cid='".$_REQUEST['cid']."'";
	$db->delete("categories",$where);
	$db->delete("products",$where);

	header("location:../all_categories.php?msg=deleted");
}