<?php
	$data = new Model();
	$whr = "email='".Session::getValue("email")."'";
	$data = $data->select("users","status",$whr);
	$data = $data['rows'][0]['status'];

	if ($data == "pending") {
		header('location:../../users/status.php');
		exit();
	}
	elseif ($data == "block") {
		header('location:../../users/block_status.php');
		exit();
	}                                                                          <?php
	$data = new Model();
	$whr = "email='".Session::getValue("email")."'";
	$data = $data->select("users","status",$whr);
	$data = $data['rows'][0]['status'];

	if ($data == "pending") {
		header('location:../../users/status.php');
		exit();
	}
	elseif ($data == "block") {
		header('location:../../users/block_status.php');
		exit();
	}