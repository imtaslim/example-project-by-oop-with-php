<?php
	require('../../classes/session.php');
	require('../../config/database.php');
	require('../../model/model.php');
	require('../../classes/validation.php');
	require('../../classes/mail.php');

	// velidation rules
	$post_value = [
		["full_name","required"],
		["email","required:email"],
		["pass","required:password"],
	];

	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header("location:../register.php?msg=".$validate->isError()."");
	}
	else{
		$db = new Model();
		$where = "email='".$_REQUEST['email']."'"; //"email='abc@gmail.com'"
		$get_email = $db->select("users","email",$where);

		// check email-----
		if($get_email['count'] < 1){
			$date = date('Y-m-d H:i:s');
	        $pass = md5($_REQUEST['pass']);
	        $token = md5($_POST['email'] . $date);

	        $_POST['pass'] = $pass;
	        $_POST['token'] = $token;
	        $_POST['status'] = 'pending';
	        $_POST['rtime'] = $d<?php
	require('../../classes/session.php');
	require('../../config/database.php');
	require('../../model/model.php');
	require('../../classes/validation.php');
	require('../../classes/mail.php');

	// velidation rules
	$post_value = [
		["full_name","required"],
		["email","required:email"],
		["pass","required:password"],
	];

	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header("location:../register.php?msg=".$validate->isError()."");
	}
	else{
		$db = new Model();
		$where = "email='".$_REQUEST['email']."'"; //"email='abc@gmail.com'"
		$get_email = $db->select("users","email",$where);

		// check email-----
		if($get_email['count'] < 1){
			$date = date('Y-m-d H:i:s');
	        $pass = md5($_REQUEST['pass']);
	        $token = md5($_POST['email'] . $date);

	        $_POST['pass'] = $pass;
	        $_POST['token'] = $token;
	        $_POST['status'] = 'pending';
	        $_POST['rtime'] = $date;
	        $_POST['dob'] = "";
	        
			if($db->insert("users",$_POST)){
				$arg = [
					"email" => $_POST['email'],
					"subject" => "varify mail",
					"path" => "users/process/varify.php",
					"body" => "varify your account",
					"token" => $token
				];
				$email = new Mail;
				if($mail = $email->sendMail($arg)){
					Session::init();
					Session::setValue("email",$_REQUEST['email']);
					header("location:../status.php");
				}
			}
		
			else{
				header("location:../register.php?msg=Registration Failed.");
			}
		}
	}	
?>