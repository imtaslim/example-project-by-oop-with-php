<?php
	require('classes/session.php');
	require('config/database.php');
	require('model/model.php');
	function dd($v){
		echo "<pre>";
		print_r($v);
		echo "</pre>";
	}
	Session::init();
	$db = new Model();

	$categories = $db->select("categories","*");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">                                                                                                                                                                                                                                                                                                        <?php
	require('classes/session.php');
	require('config/database.php');
	require('model/model.php');
	function dd($v){
		echo "<pre>";
		print_r($v);
		echo "</pre>";
	}
	Session::init();
	$db = new Model();

	$categories = $db->select("categories","*");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">