<?php
require('inc.php');

$post_value = [
	["u_id","required"],
	["status","required"]
];

$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_users.php?msg=".$validate->isError()."");
}
else{
	$db = new Model();
	
	$arg = ["status"=>$_REQUEST['status']];
	$where = "u_id='".$_REQUEST['u_id']."'";

	if($db->update("users",$arg,$where)){
		$get_email = $db->select("users","email",$where);
		$get_email = $get_email['rows'][0]['email'];
		$arg = [
			"email" => $get_email,
			"subject" => "Status",
			"path" => "",
			"body" => "<h1 style='color:green'>Admin just '".$_REQUEST['status']."' your Account</h1>",
			"token" => ""
		];
		$email = new Mail;
		if($mail = $email->sendMail($arg)){
			header("location:../all_users.php");
		}
	}
	else{
		header("location:../all_users.php?msg=failed");
	}	
}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <?php
require('inc.php');

$post_value = [
	["u_id","required"],
	["status","required"]
];

$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../all_users.php?msg=".$validate->isError()."");
}
else{
	$db = new Model();
	
	$arg = ["status"=>$_REQUEST['status']];
	$where = "u_id='".$_REQUEST['u_id']."'";

	if($db->update("users",$arg,$where)){
		$get_email = $db->select("users","email",$where);
		$get_email = $get_email['rows'][0]['email'];
		$arg = [
			"email" => $get_email,
			"subject" => "Status",
			"path" => "",
			"body" => "<h1 style='color:green'>Admin just '".$_REQUEST['status']."' your Account</h1>",
			"token" => ""
		];
		$email = new Mail;
		if($mail = $email->sendMail($arg)){
			header("location:../all_users.php");
		}
	}
	else{
		header("location:../all_users.php?msg=failed");
	}	
}