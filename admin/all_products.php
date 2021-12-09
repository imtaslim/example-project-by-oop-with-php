<?php
	require('inc.php');

	$db = new Model();
	$arg = [
			"cols" =>"*",
			"tables" => ["products","categories"],
		 	"join" => "products.cat_name=categories.cat_name",
		];
	$all_products = $db->inne<?php
	require('inc.php');

	$db = new Model();
	$arg = [
			"cols" =>"*",
			"tables" => ["products","categories"],
		 	"join" => "products.cat_name=categories.cat_name",
		];
	$all_products = $db->innerJoin($arg);

	//$all_products = $db->select("products","*");

	$view = new Views();
	$view->render("all_products",$all_products,"admin/");