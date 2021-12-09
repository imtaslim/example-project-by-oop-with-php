<?php
	require('inc.php');

	$post_value = [
		["ch_id","required"]
	];
	$validate = new Validation($post_value);

	if($validate->isError()){
		header('location:all_order.php?msg='.$validate->isError().'');
	}
	else{
		$db = new Model();
		// get checkout details-----
		$whr = "ch_id='".$_REQUEST['ch_id']."'";
		$checkout = $db->select("tbl_checkout","*",$whr);

		// get all orders-----------
		$orders = $checkout['rows'][0]['order_ids'];
		$orders = explode(",", $orders);

		$whr = "";
		foreach ($orders as $value) {
			$whr .= "'".$value."',";
		}
		$whr = substr($whr, 0,-1);
		$whr = "or_id IN (".$whr.")";
		$orders = $db->select("tbl_order","*",$whr);

		// get user details-----------
		$arg = [
			"cols" => "*",
			"tables" => ["users", "address"],
			"join" => "users.email=address.email",
			"where" => [
				["users.email","=",$checkout['rows'][0]['u_email']]
			]
		];

		$user = $db->innerJoin($arg);

<?php
	require('inc.php');

	$post_value = [
		["ch_id","required"]
	];
	$validate = new Validation($post_value);

	if($validate->isError()){
		header('location:all_order.php?msg='.$validate->isError().'');
	}
	else{
		$db = new Model();
		// get checkout details-----
		$whr = "ch_id='".$_REQUEST['ch_id']."'";
		$checkout = $db->select("tbl_checkout","*",$whr);

		// get all orders-----------
		$orders = $checkout['rows'][0]['order_ids'];
		$orders = explode(",", $orders);

		$whr = "";
		foreach ($orders as $value) {
			$whr .= "'".$value."',";
		}
		$whr = substr($whr, 0,-1);
		$whr = "or_id IN (".$whr.")";
		$orders = $db->select("tbl_order","*",$whr);

		// get user details-----------
		$arg = [
			"cols" => "*",
			"tables" => ["users", "address"],
			"join" => "users.email=address.email",
			"where" => [
				["users.email","=",$checkout['rows'][0]['u_email']]
			]
		];

		$user = $db->innerJoin($arg);

		$checkout = $checkout['rows'][0];
		$orders = $orders['rows'];
		$user = $user['rows'][0];

		$data = ["user"=>$user,"checkout"=>$checkout, "orders"=>$orders];
		
		$view = new Views();
		$view->render("single_order",$data ,"admin/");
	}