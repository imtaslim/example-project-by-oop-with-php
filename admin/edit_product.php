<?php
	require('inc.php');

	$post_value = [
		["pid","required"]
	];
	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header('location:all_products.php?msg='.$validate->isError().'');
	}
	else{
		$db = new Model();
		$pid = $_REQUEST['pid'];
		$arg = [
			"cols" =>"*",
			"tables" => ["products","categories"],
		 	"join" => "products.cid=categories.cid",
			"where" => [
				["products.pid","=",$pid]
			]
		]<?php
	require('inc.php');

	$post_value = [
		["pid","required"]
	];
	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header('location:all_products.php?msg='.$validate->isError().'');
	}
	else{
		$db = new Model();
		$pid = $_REQUEST['pid'];
		$arg = [
			"cols" =>"*",
			"tables" => ["products","categories"],
		 	"join" => "products.cid=categories.cid",
			"where" => [
				["products.pid","=",$pid]
			]
		];
		$pro = $db->innerJoin($arg);
		$cat = $db->select("categories","*");

		$product = ['pro'=>$pro, 'cat'=>$cat];

		$view = new Views();
		$view->render("edit_product",$product,"admin/");
	}