<?php
require('../../classes/session.php');
require('../../config/database.php');
require('../../model/model.php');
require('../../classes/validation.php');

	$post_value = [
		["email","required"],
		["pass","required"]
	];
	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
	header("location:../index.php?msg=".$validate->isError()."");<?php
require('../../classes/session.php');
require('../../config/database.php');
require('../../model/model.php');
require('../../classes/validation.php');

	$post_value = [
		["email","required"],
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
		$get_email = $db->select("admin","email",$where);
		
		if($get_email['count'] > 0){
			Session::init();
			Session::setValue("email",$_REQUEST['email']);
			header("location:../dashboard.php");
		}
		else{
			header("location:../index.php?msg=Email or password not matched");
		}
	}
?>