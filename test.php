<?php
	require('classes/session.php');
	require('config/database.php');
	require('model/model.php');

	function pr($v){
		echo "<pre>";
		print_r($v);
		echo "</pre>";
	}

	$db = new Model();
	$limit = 2;
	if (isset($_GET['page'])) {
		$page= $_GET['page'];
	}
	else{
		$page = 1;
	}
	$set = ($page - 1)* $limit;
	$arg = [
		"cols" => "*",
		"tables" => ["categories","products"],
		"join" => "categories.cid=products.cid",
		"limit" => [$set-$limit]
	];
	$products = $db->innerJoin($arg);

	$arg = [
		"cols" => "*",
		"tables" => ["categories","products"],
		"join" => "categories.cid=products.cid"
	];
	$count = $db->innerJoin($arg);

	pr($products);
	exit();
	/*if ($count['count'] > 0){
		$total = $count['count'];
		$total_page = ceil($total / $limit);
		echo "<ul>";
		for ($i=1; $i <= $total_page; $i++){
		echo '<li><a href="bal.php?page='.$i.'">'.$i.'</a></li>';
		}
		echo "</ul>";*/
	//}
?>                                                                                                                                                                                                                                                                                                                                                                                                               <?php
	require('classes/session.php');
	require('config/database.php');
	require('model/model.php');

	function pr($v){
		echo "<pre>";
		print_r($v);
		echo "</pre>";
	}

	$db = new Model();
	$limit = 2;
	if (isset($_GET['page'])) {
		$page= $_GET['page'];
	}
	else{
		$page = 1;
	}
	$set = ($page - 1)* $limit;
	$arg = [
		"cols" => "*",
		"tables" => ["categories","products"],
		"join" => "categories.cid=products.cid",
		"limit" => [$set-$limit]
	];
	$products = $db->innerJoin($arg);

	$arg = [
		"cols" => "*",
		"tables" => ["categories","products"],
		"join" => "categories.cid=products.cid"
	];
	$count = $db->innerJoin($arg);

	pr($products);
	exit();
	/*if ($count['count'] > 0){
		$total = $count['count'];
		$total_page = ceil($total / $limit);
		echo "<ul>";
		for ($i=1; $i <= $total_page; $i++){
		echo '<li><a href="bal.php?page='.$i.'">'.$i.'</a></li>';
		}
		echo "</ul>";*/
	//}
?>