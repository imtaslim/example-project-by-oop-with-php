<?php
	require('inc.php');

	$db = new Model();
	$where = "email='".Session::getValue("email")."'";
	$admin_data = $db->select("admin","*",$where);

	$view = new Views();
	$view->render("dashboard",$admin_data,"admin/");
?>
                                                                                 <?php
	require('inc.php');

	$db = new Model();
	$where = "email='".Session::getValue("email")."'";
	$admin_data = $db->select("admin","*",$where);

	$view = new Views();
	$view->render("dashboard",$admin_data,"admin/");
?>
