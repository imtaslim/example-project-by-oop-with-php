<?php
require('inc.php');

	/*print_r($_POST);
	exit();*/

	$post_value = [
		["pass","required"],
		["npass","required"],
		["cpass","required:password"],
	];

	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header("location:../password_update.php?msg=".$validate->isError()."");
	}
	else{

		$pass = md5($_REQUEST['pass']);
		$db = new Model();
		$where = "email='".Session::getValue("email")."' AND pass='". $pass ."'";
		$get_email = $db->select("users","email",$where);

		if($get_email['count'] < 1){
			header("location:../password_update.php?msg=Old password is not matching.");
			exit();
		}

		if($_REQUEST['npass'] != $_REQUEST['cpass']){
			header("location:../password_update.php?msg=You have to type the same password twice.");
			exit();
		}

		$cpass = md5($_REQUEST['cpass']);
		$col_data = ["pass" => $cpass];

		$where = "email='".Session::getValue("email")."'";
		$user_pass = $db->update("users",$col_data,$where);

		if($user_pass){
			$arg = [
				"email" => Session::getValue("email"),
				"subject" => "Warning",
				"path" => "",
				"body" => "<h1 style='color:red'>You Just Change Your Password</h1>",
				"token" => ""
			]<?php
require('inc.php');

	/*print_r($_POST);
	exit();*/

	$post_value = [
		["pass","required"],
		["npass","required"],
		["cpass","required:password"],
	];

	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header("location:../password_update.php?msg=".$validate->isError()."");
	}
	else{

		$pass = md5($_REQUEST['pass']);
		$db = new Model();
		$where = "email='".Session::getValue("email")."' AND pass='". $pass ."'";
		$get_email = $db->select("users","email",$where);

		if($get_email['count'] < 1){
			header("location:../password_update.php?msg=Old password is not matching.");
			exit();
		}

		if($_REQUEST['npass'] != $_REQUEST['cpass']){
			header("location:../password_update.php?msg=You have to type the same password twice.");
			exit();
		}

		$cpass = md5($_REQUEST['cpass']);
		$col_data = ["pass" => $cpass];

		$where = "email='".Session::getValue("email")."'";
		$user_pass = $db->update("users",$col_data,$where);

		if($user_pass){
			$arg = [
				"email" => Session::getValue("email"),
				"subject" => "Warning",
				"path" => "",
				"body" => "<h1 style='color:red'>You Just Change Your Password</h1>",
				"token" => ""
			];
			$email = new Mail;
			$mail = $email->sendMail($arg);
			header("location:../profile.php?msg=Password Updated");
		}
		else {
			header("location:../password_update.php?msg=Update failed.");
		}
	}
?>