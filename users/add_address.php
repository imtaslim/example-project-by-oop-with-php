<?php
	require('inc.php');
	require('status_checker.php');

	$where = "email='".Session::getValue("email")."'";

	$db = new Model();
	$user = $db->select("users","*",$where);
	$address = $db->select("address","*",$where);

	$data = ['us'=>$user, 'add'=>$address];

	$view = new Views();
	$view->render("add_address",$data,"users/");
?>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     <?php
	require('inc.php');
	require('status_checker.php');

	$where = "email='".Session::getValue("email")."'";

	$db = new Model();
	$user = $db->select("users","*",$where);
	$address = $db->select("address","*",$where);

	$data = ['us'=>$user, 'add'=>$address];

	$view = new Views();
	$view->render("add_address",$data,"users/");
?>
