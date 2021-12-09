<?php
	require('inc.php');

	$post_value = [
		["aid","required"]
	];
	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header('location:all_admin.php?msg='.$validate->isError().'')<?php
	require('inc.php');

	$post_value = [
		["aid","required"]
	];
	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header('location:all_admin.php?msg='.$validate->isError().'');
	}
	else{
		$db = new Model();
		$where = "aid='".$_REQUEST['aid']."'";
		$admin = $db->select("admin","*",$where);

		$view = new Views();
		$view->render("edit_admin",$admin,"admin/");
	}