<?php
	require('inc.php');	
	require('adminRolesChecker.php');

	$db = new Model();
	$all_admin = $db->select("admin","*");

	$view = new Views();
	$view->render("all_admin",$all_admin,"admin/");                                                                            <?php
	require('inc.php');	
	require('adminRolesChecker.php');

	$db = new Model();
	$all_admin = $db->select("admin","*");

	$view = new Views();
	$view->render("all_admin",$all_admin,"admin/");