<?php
	require('../classes/session.php');
	require('../config/database.php');
	require('../model/model.php');
	require('../classes/validation.php');

	$post_value = [
		["token","required"]
	];
	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header('location:index.php?msg='.$validate->isError().'');
	}
	else{
		$db = new Model();
		$where = "token='".$_REQUEST['token']."'";
		$email = $db->select("users","email",$where);
		$email = $email['rows'][0]['email'];

		$col_data = ["status" => 'active'];

		$where = "email='".$email."'";
		$user_pass = $db->update("users",$col_data,$where);





		
	}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             <?php
	require('../classes/session.php');
	require('../config/database.php');
	require('../model/model.php');
	require('../classes/validation.php');

	$post_value = [
		["token","required"]
	];
	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header('location:index.php?msg='.$validate->isError().'');
	}
	else{
		$db = new Model();
		$where = "token='".$_REQUEST['token']."'";
		$email = $db->select("users","email",$where);
		$email = $email['rows'][0]['email'];

		$col_data = ["status" => 'active'];

		$where = "email='".$email."'";
		$user_pass = $db->update("users",$col_data,$where);





		
	}