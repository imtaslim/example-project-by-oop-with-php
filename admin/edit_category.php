<?php
	require('inc.php');

	$post_value = [
		["cid","required"]
	];
	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header('location:all_category.php?msg='.$validate->isError().'');
	}
	else{
		$db = new Model();
		$where = "cid='".$_REQUEST['cid']."'";
		$category = $db->select("categories","*",$where);

		$view = new Views();
		$view->render("edit_category",$catego<?php
	require('inc.php');

	$post_value = [
		["cid","required"]
	];
	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header('location:all_category.php?msg='.$validate->isError().'');
	}
	else{
		$db = new Model();
		$where = "cid='".$_REQUEST['cid']."'";
		$category = $db->select("categories","*",$where);

		$view = new Views();
		$view->render("edit_category",$category,"admin/");
	}