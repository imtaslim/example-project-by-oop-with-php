<?php
require('inc.php');

$post_value = [
	["email","required"]
];
$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_users.php?msg=".$validate->isError()."");}
else{
	$db = new Model();
	$where = "email='".$_REQUEST['email']."'";
	$whr = "u_email='".$_REQUEST['email']."'";
	if ($db->delete("users",$where)) {
		if (<?php
require('inc.php');

$post_value = [
	["email","required"]
];
$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_users.php?msg=".$validate->isError()."");}
else{
	$db = new Model();
	$where = "email='".$_REQUEST['email']."'";
	$whr = "u_email='".$_REQUEST['email']."'";
	if ($db->delete("users",$where)) {
		if ($db->delete("address",$where)) {
			if($db->delete("tbl_order",$whr)){
				if ($db->delete("tlb_checkout",$whr)) {
					header("location:../all_users.php?msg=deleted");
				}
			}
		}
	}
	else{
		header("location:../all_users.php?msg=failed");
	}
	


	
}