<?php
	require('inc.php');

	$db = new Model();
	$all_categories = $db->select("categories","*");

	$view = new Views();
	$view->render("all_categories",$all_categories,"admin/");                 <?php
	require('inc.php');

	$db = new Model();
	$all_categories = $db->select("categories","*");

	$view = new Views();
	$view->render("all_categories",$all_categories,"admin/");