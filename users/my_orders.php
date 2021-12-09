<?php
	require('inc.php');
	require('status_checker.php');

	$where = "u_email='".Session::getValue("email")."'";

	$db = new Model();
	<?php
	require('inc.php');
	require('status_checker.php');

	$where = "u_email='".Session::getValue("email")."'";

	$db = new Model();
	$user_data = $db->select("tbl_checkout","*",$where);

	$view = new Views();
	$view->render("my_orders",$user_data,"users/");
?>
