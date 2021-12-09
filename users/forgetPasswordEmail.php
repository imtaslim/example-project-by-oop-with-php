<?php
	require('inc.php');

	$view = new Views();
	$view->render("block_status",false,"users/");<?php
	require('../classes/session.php');
	require('../classes/views.php');

	$view = new Views();
	$view->render("forgetPasswordEmail",false,"users/");
?>