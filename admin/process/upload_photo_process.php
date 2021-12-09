<?php
	require('inc.php');

	$post_value = [
		["pro_pic","image_required:image"]
	];

	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header("location:../upload_photo.php?msg=".$validate->isError());
	}
	else{
		$db = new Model();
		$where = "email='".Session::getValue("email")."'";

		$get_email = $db->select("admin","pro_pic",$where);
		if($get_email['count'] > 0){
			unlink("../../assets/products/".$val['rows'][0]['pro_pic']);
		}
		
		$path = "../../assets/adminProPic/";
		if(!move_uploaded_file($_FILES['pro_pic']['tmp_name'], $path.$_FILES['pro_pic']['name'])){
			header("location:../upload_photo.php?msg=uploading failed");
			exit();
		}
		
		$_POST['pro_pic'] = $_FILES['pro_pic']['name'];
		if($db->update("admin",$_POST,$where)){
			header("location:../dashboard.php?msg=photo added");
		}
		else{
			heade<?php
	require('inc.php');

	$post_value = [
		["pro_pic","image_required:image"]
	];

	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header("location:../upload_photo.php?msg=".$validate->isError());
	}
	else{
		$db = new Model();
		$where = "email='".Session::getValue("email")."'";

		$get_email = $db->select("admin","pro_pic",$where);
		if($get_email['count'] > 0){
			unlink("../../assets/products/".$val['rows'][0]['pro_pic']);
		}
		
		$path = "../../assets/adminProPic/";
		if(!move_uploaded_file($_FILES['pro_pic']['tmp_name'], $path.$_FILES['pro_pic']['name'])){
			header("location:../upload_photo.php?msg=uploading failed");
			exit();
		}
		
		$_POST['pro_pic'] = $_FILES['pro_pic']['name'];
		if($db->update("admin",$_POST,$where)){
			header("location:../dashboard.php?msg=photo added");
		}
		else{
			header("location:../upload_photo.php?msg=failed");
		}	
	}
?>
