<?php
	require('inc.php');	
	require('adminRolesChecker.php');

	$db = new Model();
	$all_shipping = $db->select("shipping","*");

	$view = new Views();
	$view->render("all_shipping",$all_shipping,"admin/");                                                                                                                                             <?php
	require('inc.php');	
	require('adminRolesChecker.php');

	$db = new Model();
	$all_shipping = $db->select("shipping","*");

	$view = new Views();
	$view->render("all_shipping",$all_shipping,"admin/");