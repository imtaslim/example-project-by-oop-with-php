<?php
require('inc.php');

$post_value = [
	["sid","required"],
	["s_country","required"],
	["s_city","required"],
	["s_rate","required"],
	["s_method","required"],
	["s_time","required"]
];

$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_shipping.php?msg=".$validate->isError()."");
}
else{
	$db = new Model();
	$where = "sid='".$_REQUEST['sid']."'";
	$category = $db->update("shipping",$_POST,$where);

	header("location:../all_shipping.php?msg=updated");
}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <?php
require('inc.php');

$post_value = [
	["sid","required"],
	["s_country","required"],
	["s_city","required"],
	["s_rate","required"],
	["s_method","required"],
	["s_time","required"]
];

$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_shipping.php?msg=".$validate->isError()."");
}
else{
	$db = new Model();
	$where = "sid='".$_REQUEST['sid']."'";
	$category = $db->update("shipping",$_POST,$where);

	header("location:../all_shipping.php?msg=updated");
}