<?php
	require('inc.php');

	$post_value = [
		["name","required"],
		["email","required:email"],
		["pass","required:p<?php
	require('inc.php');

	$post_value = [
		["name","required"],
		["email","required:email"],
		["pass","required:password"],
		["admin_roles","required"]
	];

	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header("location:../add_admin.php?msg=".$validate->isError()."");
	}
	else{
		$db = new Model();
		$where = "email='".$_REQUEST['email']."'";
		$get_email = $db->select("admin","email",$where);
		if($get_email['count'] > 0){
			header("location:../add_admin.php?msg=Admin already exist");
		}
		else{
			$pass = md5($_REQUEST['pass']);
			
	        $_POST['pass'] = $pass;
			if($db->insert("admin",$_POST)){
				header("location:../all_admin.php?msg=Admin added");
			}
			else{
				header("location:../add_admin.php?msg=Failed");
			}
		}	
	}
?>
