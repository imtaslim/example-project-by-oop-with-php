<?php
	require('inc.php');

	$post_value = [
		["cat_name","required"],
		["p_name","required"],
		["p_price","required"],
		["p_desc","required"],
		["p_brand","required"],
		["p_stock","required"],
		["p_pic","image_required:image"]
	];

	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header("location:../add_product.php?msg=".$validate->isError().",cat_name=".$_REQUEST['cat_name']."");
	}
	else{
		$db = new Model();
		$where = "p_name='".$_REQUEST['p_name']."'";
		$get_email = $db->select("products","p_name",$where);
		if($get_email['count'] > 0){
			he<?php
	require('inc.php');

	$post_value = [
		["cat_name","required"],
		["p_name","required"],
		["p_price","required"],
		["p_desc","required"],
		["p_brand","required"],
		["p_stock","required"],
		["p_pic","image_required:image"]
	];

	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header("location:../add_product.php?msg=".$validate->isError().",cat_name=".$_REQUEST['cat_name']."");
	}
	else{
		$db = new Model();
		$where = "p_name='".$_REQUEST['p_name']."'";
		$get_email = $db->select("products","p_name",$where);
		if($get_email['count'] > 0){
			header("location:../add_product.php?msg=Product already exist");
		}
		else{
			$path = "../../assets/products/";
			if(!move_uploaded_file($_FILES['p_pic']['tmp_name'], $path.$_FILES['p_pic']['name'])){
				header("location:../add_product.php?msg=uploading failed");
				exit();
			}
			
			$_POST['p_pic'] = $_FILES['p_pic']['name'];
			if($db->insert("products",$_POST)){
				header("location:../all_products.php?msg=product added");
			}
			else{
				header("location:../add_product.php?msg=failed");
			}
		}	
	}
?>
