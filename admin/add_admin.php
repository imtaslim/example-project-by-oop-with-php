<?php
	require('inc.php');
	require('adminRolesChecker.php');

	$view = new Views();
	$view->render("add_admin",false,"admin/");
?>
