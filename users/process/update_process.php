<?php
	require('inc.php');

	$post_value = [
		["full_name","required"],
	];

	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header("location:../update.php?msg=".$validate->isError()."");
	}
	else{
		$where = "email='".Session::getValue("email")."'";

		$db = new Model();
		$user_data = $db->update("users",$_POST,$where);
		if($user_data){
			header("location:../profile.php?msg=Updated");
		}
		else {
			header("location:../update.php?msg=Update failed.");
		}
	}
?>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     <?php
	require('inc.php');

	$post_value = [
		["full_name","required"],
	];

	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header("location:../update.php?msg=".$validate->isError()."");
	}
	else{
		$where = "email='".Session::getValue("email")."'";

		$db = new Model();
		$user_data = $db->update("users",$_POST,$where);
		if($user_data){
			header("location:../profile.php?msg=Updated");
		}
		else {
			header("location:../update.php?msg=Update failed.");
		}
	}
?>
