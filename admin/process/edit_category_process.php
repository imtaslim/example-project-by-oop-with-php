<?php
require('inc.php');

$post_value = [
	["cid","required"],
	["cat_name","required"]
];
$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_categories.php?msg=".$validate->isError()."");
}
else{
	$db = new Model();
	$where = "cid='".$_REQUEST['cid']."'";
	$category = $db->update("categories",$_POST,$where);

	header("location:../all_categories.php");
}                                                                                                         <?php
require('inc.php');

$post_value = [
	["cid","required"],
	["cat_name","required"]
];
$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_categories.php?msg=".$validate->isError()."");
}
else{
	$db = new Model();
	$where = "cid='".$_REQUEST['cid']."'";
	$category = $db->update("categories",$_POST,$where);

	header("location:../all_categories.php");
}