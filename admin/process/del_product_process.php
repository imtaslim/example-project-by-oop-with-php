<?php
require('inc.php');

$post_value = [
	["pid","required"]
];
$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_products.php?msg=".$validate->isError()."");}
else{
	$db = new Model();
	$where = "pid='".$_REQUEST['pid']."'";
	$val = $db->select("products","p_pic",$where);

 	unlink("../../assets/products/".$val['rows'][0]['p<?php
require('inc.php');

$post_value = [
	["pid","required"]
];
$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_products.php?msg=".$validate->isError()."");}
else{
	$db = new Model();
	$where = "pid='".$_REQUEST['pid']."'";
	$val = $db->select("products","p_pic",$where);

 	unlink("../../assets/products/".$val['rows'][0]['p_pic']);
 	$db->delete("products",$where);

 	header("location:../all_products.php?msg=deleted");
}