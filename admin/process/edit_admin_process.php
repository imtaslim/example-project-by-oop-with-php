<?php
require('inc.php');

$post_value = [
	["aid","required"],
	["name","required"],
	["email","required:email"],
	["phone","required"],
	["address","required"],
	["admin_roles","required"]
];

$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_admin.php?msg=".$validate->isError()."");
}
else{
	$db = new Model();
	$where = "aid='".$_REQUEST['aid']."'";
	$category = $db->update("admin",$_POST,$where);

	header("location:../all_admin.php?msg=updated");
}                                                                                                                          <?php
require('inc.php');

$post_value = [
	["aid","required"],
	["name","required"],
	["email","required:email"],
	["phone","required"],
	["address","required"],
	["admin_roles","required"]
];

$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_admin.php?msg=".$validate->isError()."");
}
else{
	$db = new Model();
	$where = "aid='".$_REQUEST['aid']."'";
	$category = $db->update("admin",$_POST,$where);

	header("location:../all_admin.php?msg=updated");
}