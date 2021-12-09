<?php
	require('inc.php');	
	require('adminRolesChecker.php');

	$post_value = [
		["pay_id","required"]
	];
	$validate = new Validation($post_value);

	if($validate->isError()){
		header('location:all_paymethod.php?msg='.$validate->isError().'');
	}
	else{
		$db = new Model();
		$where = "pay_id='".$_REQUEST['pay_id']."'";
		$paymethod = $db->select("paymethod","*",$where);

		$view = new Views();
		$view->render("edit_paymethod<?php
	require('inc.php');	
	require('adminRolesChecker.php');

	$post_value = [
		["pay_id","required"]
	];
	$validate = new Validation($post_value);

	if($validate->isError()){
		header('location:all_paymethod.php?msg='.$validate->isError().'');
	}
	else{
		$db = new Model();
		$where = "pay_id='".$_REQUEST['pay_id']."'";
		$paymethod = $db->select("paymethod","*",$where);

		$view = new Views();
		$view->render("edit_paymethod",$paymethod,"admin/");
	}