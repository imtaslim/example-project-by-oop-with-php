<?php
require('inc.php');

$post_value = [
	["ch_id","required"]
];
$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_orders.php?msg=".$validate->isError()."");}
else{
	$db = new Model();
	$whr = "ch_id='".$_REQUEST['ch_id']."'";
	$getOid = $db->select("tbl_checkout","*",$whr);
	$chtime = $getOid['rows'][0]['checkout_time'];
	$uEmail = $getOid['rows'][0]['u_email'];

	$where = "u_email='".$uEmail."' AND order_time='". $chtime ."'";

	$getOrder = $db->delete("tbl_order",$where);
	if ($getOrder) {
		$getOrder = $db->delete("tbl_checkout",$whr);
	}
	if ($getOrder) {
		header("location:../all_orders.php?msg=deleted");
	}
	else{
		header("location:../all_orders.php?msg=failed");
	}
}
	                 <?php
require('inc.php');

$post_value = [
	["ch_id","required"]
];
$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_orders.php?msg=".$validate->isError()."");}
else{
	$db = new Model();
	$whr = "ch_id='".$_REQUEST['ch_id']."'";
	$getOid = $db->select("tbl_checkout","*",$whr);
	$chtime = $getOid['rows'][0]['checkout_time'];
	$uEmail = $getOid['rows'][0]['u_email'];

	$where = "u_email='".$uEmail."' AND order_time='". $chtime ."'";

	$getOrder = $db->delete("tbl_order",$where);
	if ($getOrder) {
		$getOrder = $db->delete("tbl_checkout",$whr);
	}
	if ($getOrder) {
		header("location:../all_orders.php?msg=deleted");
	}
	else{
		header("location:../all_orders.php?msg=failed");
	}
}
	