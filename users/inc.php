help.php<?php
	require('../classes/session.php');
	require('../config/database.php');
	require('../model/model.php');
	require('../classes/views.php');
	require('../classes/validation.php');
	function dd($v){
		echo "<pre>";
		print_r($v);
		echo "</pre>";
	}
	
	Session::init();

	if(!Session::checkSession('email')){
		header("location:index.php?msg=login First");
	}
	