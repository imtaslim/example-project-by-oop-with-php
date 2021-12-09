<?php
require('../../classes/session.php');
require('../../config/database.php');
require('../../model/model.php');
require('../../classes/validation.php');

	$post_value = [
		["email","required:email"],
		["pass","required"]
	];
	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header("location:../index.php?msg=".$validate->isError()."");
	}
	else{
		$db= new Model;<?php
require('../../classes/session.php');
require('../../config/database.php');
require('../../model/model.php');
require('../../classes/validation.php');

	$post_value = [
		["email","required:email"],
		["pass","required"]
	];
	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header("location:../index.php?msg=".$validate->isError()."");
	}
	else{
		$db= new Model;
        $pass = md5($_REQUEST['pass']);

	    $where = "email='".$_REQUEST['email']."' AND pass='". $pass ."'";
		$get_email = $db->select("users","email",$where);
		
		// echo $get_email['count'];
		// exit();
		if($get_email['count'] > 0){
			if (isset($_POST['remember'])) {
				setcookie("email", $email, time() + 60*60, "/");
			}
			Session::init();
			Session::setValue("email",$_REQUEST['email']);
			header("location:../../index.php");
		}
		else{
			header("location:../index.php?msg=Email or Password is not match.");
		}
	}
?>