<?php
	require('../../classes/session.php');
	require('../../config/database.php');
	require('../../model/model.php');
	require('../../classes/validation.php');

	$post_value = [
		["token","required"]
	];
	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header('location:../index.php?msg='.$validate->isError().'');
	}
	else{
		$db = new Model();
		$where = "token='".$_REQUEST['token']."'";
		$users = $db->select("users","email",$where);

		if($users['count'] > 0){
			$col_data = ["status" => "active"];

			$where = "email='".$users['rows'][0]['email']."'";
			$user_data = $db->update("users",$col_data,$where);
			Session::init();
			Session::setValue("email",$users['rows'][0]['email']);
			header("location:../../index.php");
		}
		else{
			header("location:../index.php?wrong token found");
		}
	}                                                                                                                                             <?php
	require('../../classes/session.php');
	require('../../config/database.php');
	require('../../model/model.php');
	require('../../classes/validation.php');

	$post_value = [
		["token","required"]
	];
	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header('location:../index.php?msg='.$validate->isError().'');
	}
	else{
		$db = new Model();
		$where = "token='".$_REQUEST['token']."'";
		$users = $db->select("users","email",$where);

		if($users['count'] > 0){
			$col_data = ["status" => "active"];

			$where = "email='".$users['rows'][0]['email']."'";
			$user_data = $db->update("users",$col_data,$where);
			Session::init();
			Session::setValue("email",$users['rows'][0]['email']);
			header("location:../../index.php");
		}
		else{
			header("location:../index.php?wrong token found");
		}
	}