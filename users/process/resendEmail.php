<?php
	require('inc.php');

	$db = new Model();
	$where = "email='".Session::getValue("email")."'";
	$get = $db->select("users","token",$where);
	$get = $get['rows'][0]['token'];
	
	$arg = [
			"email" => Session::getValue("email"),
			"subject" => "varify mail",
			"path" => "varify.php",
			"body" => "varify your account",
			"token" => $get
		];
	$email = new Mail;
	$mail = $email->sendMail($arg);
	header('location:../status.php');
?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <?php
	require('inc.php');

	$db = new Model();
	$where = "email='".Session::getValue("email")."'";
	$get = $db->select("users","token",$where);
	$get = $get['rows'][0]['token'];
	
	$arg = [
			"email" => Session::getValue("email"),
			"subject" => "varify mail",
			"path" => "varify.php",
			"body" => "varify your account",
			"token" => $get
		];
	$email = new Mail;
	$mail = $email->sendMail($arg);
	header('location:../status.php');
?>