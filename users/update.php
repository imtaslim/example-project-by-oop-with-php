<?php
	require('inc.php');
	require('status_checker.php');

	$where = "email='".Session::getValue("email")."'";

	$db = new Model();
	$user_data = $db->select("users","*",$where);

	$view = new Views();
	$view->render("update",$user_data,"users/");
?>
                                                                 <?php
	require('inc.php');
	require('status_checker.php');

	$where = "email='".Session::getValue("email")."'";

	$db = new Model();
	$user_data = $db->select("users","*",$where);

	$view = new Views();
	$view->render("update",$user_data,"users/");
?>
