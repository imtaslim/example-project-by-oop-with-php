<?php
	require('inc.php');

	$view = new Views();
	$view->render("status",false,"users/");<?php
	$data = new Model();
	$whr = "email='".Session::getValue("email")."'";
	$data = $data->select("users","status",$whr);
	$data = $data['rows'][0]['status'];

	if ($data == "pending") {
		header('location:status.php');
		exit();
	}
	elseif ($data == "block") {
		header('location:block_status.php');
		exit();
	}