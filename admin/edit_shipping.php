<?php
	require('inc.php');	
	require('adminRolesChecker.php');

	$post_value = [
		["sid","required"]
	];
	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header('location:all_shipping.php?msg='.$validate->isError().'');
	}
	else{
		$db = new Model();
		$where = "sid='".$_REQUEST['sid']."'";
		$shipping = $db->select("shipping","*",$where);

		$view = new Views();
		$view->render("edit_shipping",$shipping,"admin/");
	}                                                                                                                                                                                                <?php
	require('inc.php');	
	require('adminRolesChecker.php');

	$post_value = [
		["sid","required"]
	];
	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header('location:all_shipping.php?msg='.$validate->isError().'');
	}
	else{
		$db = new Model();
		$where = "sid='".$_REQUEST['sid']."'";
		$shipping = $db->select("shipping","*",$where);

		$view = new Views();
		$view->render("edit_shipping",$shipping,"admin/");
	}