<?php
	require('../../classes/session.php');
	require('../../config/database.php');
	require('../../model/model.php');
	require('../../classes/views.php');
	require('../../classes/validation.php');
	<?php
	require('../../classes/session.php');
	require('../../config/database.php');
	require('../../model/model.php');
	require('../../classes/views.php');
	require('../../classes/validation.php');
	require('../../classes/mail.php');

	function dd($v){
		echo "<pre>";
		print_r($v);
		echo "</pre>";
	}
	
	Session::init();

	if(!Session::checkSession('email')){
		header("location:../../users/index.php");
	}