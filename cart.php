                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 <?php require('public/include/inc.php'); ?>
<?php
	$data = new Model();
	$whr = "email='".Session::getValue("email")."'";
	$data = $data->select("users","status",$whr);
	$data = $data['rows'][0]['status'];

	if ($data == "pending") {
		header('location:users/status.php');
		exit();
	}
	elseif ($data == "block") {
		header('location:users/block_status.php');
		exit();
	}

?>
	<title>Cart</title>
	<?php require('public/include/header.php'); ?>
</td>
<td>
<?php
	if(!Session::checkSession('email')){
		header("location:users/index.php");
	}
	$sub_total = 0;
	// Users ----
	$u_email = Session::getValue("email");
	$where = "email='".$u_email."'";
	$user = $db->select("users","*",$where);
	$address = $db->select("address","*",$where);

	$user = $user['rows'][0];
	$address = $address['rows'];

	$ar = array();
	if ($address != $ar) {
		$address = $address[0];
	}
	else{
		$address['b_address'] = "";
		$address['b_city'] = "";
		$address['b_postal'] = "";
		$address['b_country'] = "";
		$address['b_phone'] = "";
	}

		
		function value($ch){
			if($ch != ""){
				echo $ch;
			}
			echo "";
		}

	// Shipping ---
	if ($address['b_city'] != "") {
		$where = "s_city='".$address['b_city']."'";
		$get_shipping = $db->select("shipping","*",$where);
	}
	
	// Payment Method
	$get_pay = $db->select("paymethod","*");

	// Cart ---
	$where = "u_email='".$u_email."'";
	$get_data = $db->select("cart","*",$where);
?>
<h3>Cart page</h3>
<?php
	if($get_data['count'] == 0){
		echo '<h1 align="center">Cart is empty!</h1>';
	}
	else{
?>

<strong>Name: </strong><?php echo $user['full_name']; ?><br>
<strong>Shipping Address: </strong><?php echo $address['b_address'].", ".$address['b_city'].", ".$address['b_country']; ?><br>
<strong>Shipping Phone: </strong><?php echo $address['b_phone']; ?><br>
<strong>Email: </strong><?php echo $user['email']; ?><br>
<strong>Change Shipping </strong><button><a href="users/add_address.php">Address</a></button>
<P>&nbsp;</P>
<table width="600">
	<tr>
		<th align="left">Product Name </th>
		<th align="left">Price </th>
		<th align="left">Qty. </th>
		<th align="left">Total</th>
		<th align="left">Action</th>
	</tr>
<?php
	foreach ($get_data["rows"] as $value) {
?>
	<tr>
		<td><?php echo $value['p_name']; ?></td>
		<td><?php echo $value['p_price']; ?></td>
		<td><?php echo $value['qty']; ?></td>
		<td><?php echo $value['price_total']; ?></td>
		<td><a href="public/process/cancel_product.php?crt_id=<?php echo $value['crt_id']; ?>">Cancel</a></td>
	</tr>
<?php
	$sub_total += $value['price_total'];
	}
?>
	<tr>
		<td colspan="5"><hr></td>
	</tr>
	<tr>
		<td></td>
		<td colspan="2">Sub Total:</td>
		<td><?php echo $sub_total; ?></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td colspan="2">Shipping Charge:</td>
		<?php if(isset($get_shipping)){ ?>
			<td><?php echo $get_shipping['rows'][0]['s_rate']; ?></td>
		<?php } ?>
		<td></td>
	</tr>
	<tr>
		<td colspan="5"><hr></td>
	</tr>
	<tr>
		<td></td>
		<td colspan="2">Total:</td>
		<?php if(isset($get_shipping)){ ?>
			<td><?php echo ($sub_total + $get_shipping['rows'][0]['s_rate']); ?></td>
		<?php }
		else{
			echo $sub_total;
		} ?>
		<td></td>
	</tr>
	<tr>
		<td colspan="5">
			<form action="public/process/checkout_process.php" method="post">
				<input type="hidden" name="shipping_cost" value="<?php if(isset($get_shipping)){echo $get_shipping['rows'][0]['s_rate']; }else{ echo ""; } ?>">
				<input type="hidden" name="final_total" value="<?php if(isset($get_shipping)){echo ($sub_total + $get_shipping['rows'][0]['s_rate']); }else{ echo ""; } ?>">
				<?php
					foreach ($get_pay['rows'] as $value) {
						if($value['pay_method'] === "Cash on Delivery"){
							echo '<input type="radio" name="pay_method" value="'.$value['pay_method'].'" checked>'
							.$value['pay_method'].'<br>';
						}
						else{
							echo '<input type="radio" name="pay_method" value="'.$value['pay_method'].'">'
							.$value['pay_method'].'<br>';
						}
					}
				?>
				<p>&nbsp;</p>
				<button><a href="public/process/clear_cart.php">Clear Cart</a></button>
				<input type="submit" value="Check Out">
			</form>
		</td>
	</tr>
</table>
<?php } require("public/include/footer.php"); ?>