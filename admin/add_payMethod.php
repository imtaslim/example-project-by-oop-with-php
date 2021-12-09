<?php
	require('inc.php');

	$view = new Views();
	$view->render("add_category",false,"admin/");
?>
<?php
	require('inc.php');	
	require('adminRolesChecker.php');

	$view = new Views();
	$view->render("add_payMethod",false,"admin/");