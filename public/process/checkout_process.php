<?php
require("inc.php");
require("status_checker.php");

$arg = [
	["shipping_cost","required"],
	["final_total","required"],
	["pay_method","required"]
];
$validate = new Validation($arg);

// check validation
if($validate->isError()){
	header("location:../../cart.php?msg=".$validate->isError()."");
}
else{
	$get_time = date('Y-m-d H:i:s');
	$get_email = Session::getValue("email");
	$order_ids = "";

	$db = new Model();
	$where = "u_email='".$get_email."'";
	$get_cart = $db->select("cart","u_email,pid,p_name,p_price,qty,price_total",$where);

	// insert into Order table ---
	foreach ($get_cart['rows'] as $value) {
		$value['order_time'] = $get_time;
		$db->insert("tbl_order",$value);
		//substract stock
		$whr = "pid='".$value['pid']."'";
		$get_product_qty = $db->select("products","p_stock",$whr);

		$current_qty = $get_product_qty['rows'][0]['p_stock']-$value['qty'];
		$col_data<?php
require("inc.php");
require("status_checker.php");

$arg = [
	["shipping_cost","required"],
	["final_total","required"],
	["pay_method","required"]
];
$validate = new Validation($arg);

// check validation
if($validate->isError()){
	header("location:../../cart.php?msg=".$validate->isError()."");
}
else{
	$get_time = date('Y-m-d H:i:s');
	$get_email = Session::getValue("email");
	$order_ids = "";

	$db = new Model();
	$where = "u_email='".$get_email."'";
	$get_cart = $db->select("cart","u_email,pid,p_name,p_price,qty,price_total",$where);

	// insert into Order table ---
	foreach ($get_cart['rows'] as $value) {
		$value['order_time'] = $get_time;
		$db->insert("tbl_order",$value);
		//substract stock
		$whr = "pid='".$value['pid']."'";
		$get_product_qty = $db->select("products","p_stock",$whr);

		$current_qty = $get_product_qty['rows'][0]['p_stock']-$value['qty'];
		$col_data = ["p_stock" => $current_qty];

		$db->update("products",$col_data,$whr);
	}

	// delete cart ---
	$db->delete("cart",$where);

	// get order ids ---
	$where = "u_email='".$get_email."' AND order_time='".$get_time."'";
	$get_order = $db->select("tbl_order","or_id",$where);
	foreach ($get_order['rows'] as $value) {
		$order_ids .= $value['or_id'].",";
	}
	$order_ids = substr($order_ids, 0,-1);


	// Insert into check out
	$_POST['u_email'] = $get_email;
	$_POST['order_ids'] = $order_ids;
	$_POST['order_status'] = "pending";
	$_POST['checkout_time'] = $get_time;
		
	if($db->insert("tbl_checkout",$_POST)){

		$where = "u_email='".$get_email."' AND checkout_time='".$get_time."'";
		$get_checkout = $db->select("tbl_checkout","ch_id",$where);
		$ch_id = $get_checkout['rows'][0]['ch_id'];


		$arg = ["ch_id"=>$ch_id, "trans_time"=>$get_time, "pay_method"=>$_POST['pay_method']];
		$db->insert("tbl_transections",$arg);

		$arg = [
			"email" => "officeworks@gmail.com",
			"subject" => "New Order",
			"path" => "",
			"body" => "<h1 style='color:green'>New order from User with Email Address:'".Session::getValue('email')."'</h1>",
			"token" => ""
		];
		$email = new Mail;
		if($mail = $email->sendMail($arg)){
			$arg = [
				"email" => "Session::getValue('email')",
				"subject" => "New Order",
				"path" => "",
				"body" => "<h1 style='color:green'>Thank You For Your Order. We will contact with you shortly to confirm your order</h1>",
				"token" => ""
			];
			$email = new Mail;
			if($mail = $email->sendMail($arg)){
				header("location:../../index.php?msg=Thank you for your order!");
			}
		}
	}
	else{
		header("location:../../index.php?msg=Purchasing Error!");
	}
	
		
}