<?php
	require('inc.php');

	$db = new Model();
	$all_categories = $db->select("categories","*");
	
	$view = new Views();
	$view->r<?php
	require('inc.php');

	$db = new Model();
	$all_categories = $db->select("categories","*");
	
	$view = new Views();
	$view->render("add_product",$all_categories,"admin/");