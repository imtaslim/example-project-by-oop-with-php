<?php
	require('inc.php');

	if ($_FILES['p_pic']['name'] !="") {
		$post_value = [
			["p_name","required"],
			["cat_name","required"],
			["p_price","required"],
			["p_desc","required"],
			["p_brand","required"],
			["p_stock","required"],
			["p_pic","image_required:image"]
		];
	}
	else{
		$post_value = [
			["p_name","required"],
			["cat_name","required"],
			["p_price","required"],
			["p_desc","required"],
			["p<?php
	require('inc.php');

	if ($_FILES['p_pic']['name'] !="") {
		$post_value = [
			["p_name","required"],
			["cat_name","required"],
			["p_price","required"],
			["p_desc","required"],
			["p_brand","required"],
			["p_stock","required"],
			["p_pic","image_required:image"]
		];
	}
	else{
		$post_value = [
			["p_name","required"],
			["cat_name","required"],
			["p_price","required"],
			["p_desc","required"],
			["p_brand","required"],
			["p_stock","required"]
		];
	}

	$validate = new Validation($post_value);
	
	if ($validate->isError()) {
		header("location:../edit_product.php?msg=".$validate->isError()."&pid=".$_REQUEST['pid']."");
	}

	else{
		$db= new Model();
		$where = "pid ='".$_REQUEST['pid']."'";
		$getpic = $db->select("products","p_pic",$where);

		if ($_FILES['p_pic']['name'] !="") {

			$path = "../../assets/products/";

			unlink($path.$getpic['p_pic']);
			if (!move_uploaded_file($_FILES['p_pic']['tmp_name'], $path.$_FILES['p_pic']['name'])) {
				header("location:../edit_product.php?pid=".$value['pid']."&msg=(Photo uploading Error.)");
				exit();
			}

			$_POST['p_pic'] = $_FILES['p_pic']['name'];

			if ($db->update("products",$_POST,$where)) {
				header("location:../all_products.php?msg=Update Successful.");
			}
			else{
				header("location:../edit_product.php?pid=".$value['pid']."&msg=failed.");		
			}

		}
		else{
			if ($db->update("products",$_POST,$where)) {
				header("location:../all_products.php?msg=Update Successful.");
			}
			else{
				header("location:../edit_product.php?pid=".$value['pid']."&msg=failed.");		
			}
		}
	}