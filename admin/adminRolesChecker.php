<?php
	$data = new Model();
	$whr = "email='".Session::getValue("email")."'";
	$admin_data = $data->select("admin","admin_roles",$whr)<?php
	$data = new Model();
	$whr = "email='".Session::getValue("email")."'";
	$admin_data = $data->select("admin","admin_roles",$whr);
	$admin_data = $admin_data['rows'][0]['admin_roles'];

	if ($admin_data != "admin") {
		header('location:dashboard.php');
		exit();
	}