<?php
	require('inc.php');	
	require('adminRolesChecker.php');

	$db = new Model();
	$arg = [
			"cols" =>"*",
			"tables" => ["users","address"],
		 	"join" => "users.email=address.email",
		];
	$all_user<?php
	require('inc.php');	
	require('adminRolesChecker.php');

	$db = new Model();
	$arg = [
			"cols" =>"*",
			"tables" => ["users","address"],
		 	"join" => "users.email=address.email",
		];
	$all_users = $db->innerJoin($arg);

	$view = new Views();
	$view->render("all_users",$all_users,"admin/");