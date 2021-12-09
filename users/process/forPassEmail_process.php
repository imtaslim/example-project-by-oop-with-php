<?php
	require('../../config/database.php');
	require('../../model/model.php');
	require('../../classes/validation.php');
	require('../../classes/mail.php');


	$post_value = [
		["email","required:email"],
	];
	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header("location:../forgetPasswordEmail.php?msg=".$validate->isError()."");
	}
	else{
		$db= new Model;

	    $where = "email='".$_REQUEST['email']."'";
		$get_email = $db->select("users","*",$where);
		
		// echo $get_email['count'];
		// exit();
		if($get_email['count'] > 0){
		
			$token = $get_email['rows'][0]['token'];

			$arg = [
				"email" => $where,
				"subject" => "varify mail",
				"path" => "users/resetpassword.php",
				"body" => "varify your account",
				"token" => $token

			];
			$email = new Mail;
			$mail = $email->sendMail($arg);

			header('location:../pass_status.php');
		}
		else{
			header("location:../register.php?msg=Register First.");
		}
	}
?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           <?php
	require('../../config/database.php');
	require('../../model/model.php');
	require('../../classes/validation.php');
	require('../../classes/mail.php');


	$post_value = [
		["email","required:email"],
	];
	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header("location:../forgetPasswordEmail.php?msg=".$validate->isError()."");
	}
	else{
		$db= new Model;

	    $where = "email='".$_REQUEST['email']."'";
		$get_email = $db->select("users","*",$where);
		
		// echo $get_email['count'];
		// exit();
		if($get_email['count'] > 0){
		
			$token = $get_email['rows'][0]['token'];

			$arg = [
				"email" => $where,
				"subject" => "varify mail",
				"path" => "users/resetpassword.php",
				"body" => "varify your account",
				"token" => $token

			];
			$email = new Mail;
			$mail = $email->sendMail($arg);

			header('location:../pass_status.php');
		}
		else{
			header("location:../register.php?msg=Register First.");
		}
	}
?>