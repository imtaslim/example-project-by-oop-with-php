<?php
	require('inc.php');

	$db = new Model();
	$checkout = $db->select("tbl_checkout","*");

	$view = new Views();
	$view->render("all_orders",$checkout ,"admin/");             <?php
	require('inc.php');

	$db = new Model();
	$checkout = $db->select("tbl_checkout","*");

	$view = new Views();
	$view->render("all_orders",$checkout ,"admin/");