<?php
require("inc.php");
require("status_checker.php");

$arg = [
	["crt_id","required"]
];
$validate = new Validation($arg);

// check validation
if($validate->isError()){
	header("location:../../cart.php?msg=".$validate->isError()."");
}
else{
	$db = new Model();
	$where = "crt_id='".$_REQUEST['crt_id']."'";
	$db->delete("cart",$where);

	header("location:../../cart.php");
}                                                                                                              <?php
require("inc.php");
require("status_checker.php");

$arg = [
	["crt_id","required"]
];
$validate = new Validation($arg);

// check validation
if($validate->isError()){
	header("location:../../cart.php?msg=".$validate->isError()."");
}
else{
	$db = new Model();
	$where = "crt_id='".$_REQUEST['crt_id']."'";
	$db->delete("cart",$where);

	header("location:../../cart.php");
}