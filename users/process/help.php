<?php
	require('inc.php');

	$db = new Model();
	$where = "email='".Session::getValue("email")."'";
	$get_id = $db->select("users","u_id",$where);
	$get_id = $get_id['rows'][0]['u_id'];

	$arg = [
		"email" => "officeworks@gmail.com",
		"subject" => "request",
		"path" => "",
		"body" => "<h1 style='color:red'>Your User with a ID NO: '".$get_id."' is requesting you to get back their account. Please review this.</h1>",
		"token" => ""
	];
	$email = new Mail;
	if($mail = $email->sendMail($arg)){
		session::destroyValues();
		header("location:../index.php?msg=Admin will give you their review soon");
	}

                                                                                                                                                                                                                                                                                                                                                                                                                 <?php
	require('inc.php');

	$db = new Model();
	$where = "email='".Session::getValue("email")."'";
	$get_id = $db->select("users","u_id",$where);
	$get_id = $get_id['rows'][0]['u_id'];

	$arg = [
		"email" => "officeworks@gmail.com",
		"subject" => "request",
		"path" => "",
		"body" => "<h1 style='color:red'>Your User with a ID NO: '".$get_id."' is requesting you to get back their account. Please review this.</h1>",
		"token" => ""
	];
	$email = new Mail;
	if($mail = $email->sendMail($arg)){
		session::destroyValues();
		header("location:../index.php?msg=Admin will give you their review soon");
	}

