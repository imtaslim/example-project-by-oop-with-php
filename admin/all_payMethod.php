<?php
	require('inc.php');	
	require('adminRolesChecker.php');

	$db = new Model();
	$paymethod = $db->select("paymethod","*");

	$view = new Views();
	$view->render<?php
	require('inc.php');	
	require('adminRolesChecker.php');

	$db = new Model();
	$paymethod = $db->select("paymethod","*");

	$view = new Views();
	$view->render("all_paymethod",$paymethod ,"admin/");