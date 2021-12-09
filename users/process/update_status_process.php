<?php
	require('inc.php');

	$post_value = [
		["ch_id","required"],
		["pid","required"],
		["qty","required"],
		["order_status","required"],
	];

	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header("location:../single_order.php?msg=".$validate->isError().",ch_id=".$_REQUEST['ch_id']."");
	}
	else{
		$db = new Model();
		if ($_REQUEST['order_status'] == 'cancel') {
			$whr = "pid='".$_REQUEST['pid']."'";
		$get_product_qty = $db->select("products","p_stock",$whr);

	<?php
	require('inc.php');

	$post_value = [
		["ch_id","required"],
		["pid","required"],
		["qty","required"],
		["order_status","required"],
	];

	$validate = new Validation($post_value);

	// check validation
	if($validate->isError()){
		header("location:../single_order.php?msg=".$validate->isError().",ch_id=".$_REQUEST['ch_id']."");
	}
	else{
		$db = new Model();
		if ($_REQUEST['order_status'] == 'cancel') {
			$whr = "pid='".$_REQUEST['pid']."'";
		$get_product_qty = $db->select("products","p_stock",$whr);

		$current_qty = ($get_product_qty['rows'][0]['p_stock']+$_REQUEST['qty']);
		$col_data = ["p_stock" => $current_qty];

		$db->update("products",$col_data,$whr);
		}
		
		$arg = ["order_status"=>$_REQUEST['order_status']];
		$where = "ch_id='".$_REQUEST['ch_id']."'";

		if($db->update("tbl_checkout",$arg,$where)){
			$arg = [
				"email" => "officeworks@gmail.com",
				"subject" => "Order Cancelation",
				"path" => "",
				"body" => "<h1 style='color:green'>User with Email Address: '".Session::getValue('email')."' just cancel an order</h1>",
				"token" => ""
			];
			$email = new Mail;
			if($mail = $email->sendMail($arg)){
				header("location:../single_order.php?ch_id=".$_REQUEST['ch_id']."");
			}
		}
		else{
			header("location:../single_order.php?msg=failed");
		}	
	}