<?php
require('inc.php');

$post_value = [
	["aid","required"]
];
$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_admin.php?msg=".$validate->isError()."");}
else{
	$db = new Model();
	$where = "aid='".$_REQUEST['aid']."'";
	$db->delete("admin",$where);

	header("location:../all_admin.php?msg=deleted");
}                                                                                                                                                                                                                                                                                                                                                                                                            <?php
require('inc.php');

$post_value = [
	["aid","required"]
];
$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_admin.php?msg=".$validate->isError()."");}
else{
	$db = new Model();
	$where = "aid='".$_REQUEST['aid']."'";
	$db->delete("admin",$where);

	header("location:../all_admin.php?msg=deleted");
}