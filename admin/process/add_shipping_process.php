<?php
require('inc.php');

$post_value = [
	["s_country","required"],
	["s_city","required"],
	["s_rate","required"],
	["s_method","required"],
	["s_time","required"]
];

$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../add_shipping.php?msg=".$validate->isError()."");
}
else{
	$db = new Model();
	$where = "s_city='".$_REQUEST['s_city']."' AND s_country='".$_REQUEST['s_country']."'";
	$get_city = $db->select("shipping","s_city",$where);
	if($get_city['count'] > 0){
		header("location:../add_shipping.php?msg=Already Exist");
	}
	else{			
		if($db->insert("shipping",$_POST)){
			header("location:../all_shipping.php?msg=Added");
		}
		else{
			header("location:../add_shipping.php?msg=Failed");
		}
	}	
}                                                                                                                                                                                                                                                                                                                                                                                <?php
require('inc.php');

$post_value = [
	["s_country","required"],
	["s_city","required"],
	["s_rate","required"],
	["s_method","required"],
	["s_time","required"]
];

$validate = new Validation($post_value);

// check validation
if($validate->isError()){
	header("location:../add_shipping.php?msg=".$validate->isError()."");
}
else{
	$db = new Model();
	$where = "s_city='".$_REQUEST['s_city']."' AND s_country='".$_REQUEST['s_country']."'";
	$get_city = $db->select("shipping","s_city",$where);
	if($get_city['count'] > 0){
		header("location:../add_shipping.php?msg=Already Exist");
	}
	else{			
		if($db->insert("shipping",$_POST)){
			header("location:../all_shipping.php?msg=Added");
		}
		else{
			header("location:../add_shipping.php?msg=Failed");
		}
	}	
}