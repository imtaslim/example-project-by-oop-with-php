<?php
	require('inc.php');

	$post_value = [
		["cat_name","required"]
	];

	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header("location:../add_category.php?msg=".$validate->isError()."");
	}
	else{
		$db = new Model();
		$where = "cat_name='".$_REQUEST['cat_name']."'";
		$get_email = $db->select("categories","cat_name",$where);
		if($get_email['count'] > 0){
			header("location:../add_category.php");
		}
		else{
			if($db->insert("categories",$_POST)){
				header("location:../all_categories.php");
			}
			else{
				header("location:../add_category.php");
			}
		}	
	}
?>
                                                                                                                                                                                        <?php
	require('inc.php');

	$post_value = [
		["cat_name","required"]
	];

	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header("location:../add_category.php?msg=".$validate->isError()."");
	}
	else{
		$db = new Model();
		$where = "cat_name='".$_REQUEST['cat_name']."'";
		$get_email = $db->select("categories","cat_name",$where);
		if($get_email['count'] > 0){
			header("location:../add_category.php");
		}
		else{
			if($db->insert("categories",$_POST)){
				header("location:../all_categories.php");
			}
			else{
				header("location:../add_category.php");
			}
		}	
	}
?>
