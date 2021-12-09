<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Orders</title>
<?php require("include/header.php"); ?>
<?php 
	$user = $this->data['user']; 
	$checkout = $this->data['checkout']; 
	$orders = $this->data['orders'];

	$sub_total = 0;
?>
<table class="content">
	<center>
		<tr>
			<td>
				<strong>Name:</strong><?php echo $user['full_name'];?><br>
				<strong>Billing Address:</strong>
					<?php echo $user['b_address'].", ".$user['b_city'].", ".$user['b_country'];?><br>
				<strong>Phone:</strong><?php echo $user['b_phone'];?><br>
				<strong>Email:</strong><?php echo $user['email'];?><br>
			</td>
			<td>
				<strong>Payment Method: </strong><?php echo $checkout['pay_method'];?><br>
				<strong>Order Status: </strong><?php echo $checkout['order_status'];?>
			</td>
		</tr>
		<tr>
			<td>
				<table width="600">
					<tr>
						<th align="left">Product Name </th>
						<th align="left">Price </th>
						<th align="left">Qty. </th>
						<th align="left">Total</th>
					</tr>
				<?php
					foreach ($orders as $value) {
				?>
					<tr>
						<td><?php echo $value['p_name']; ?></td>
						<td><?php echo $value['p_price']; ?></td>
						<td><?php echo $value['qty']; ?></td>
						<td><?php echo $value['price_total']; ?></td>
					</tr>
				<?php
					$sub_total += $value['price_total'];
					}
				?>
					<tr>
						<td></td>
						<td colspan="2">Sub Total: </td>
						<td><?php echo $sub_total; ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2">Shipping Cost: </td>
						<td><?php echo $checkout['shipping_cost']; ?></td>
					</tr>
					<tr>
						<t<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Orders</title>
<?php require("include/header.php"); ?>
<?php 
	$user = $this->data['user']; 
	$checkout = $this->data['checkout']; 
	$orders = $this->data['orders'];

	$sub_total = 0;
?>
<table class="content">
	<center>
		<tr>
			<td>
				<strong>Name:</strong><?php echo $user['full_name'];?><br>
				<strong>Billing Address:</strong>
					<?php echo $user['b_address'].", ".$user['b_city'].", ".$user['b_country'];?><br>
				<strong>Phone:</strong><?php echo $user['b_phone'];?><br>
				<strong>Email:</strong><?php echo $user['email'];?><br>
			</td>
			<td>
				<strong>Payment Method: </strong><?php echo $checkout['pay_method'];?><br>
				<strong>Order Status: </strong><?php echo $checkout['order_status'];?>
			</td>
		</tr>
		<tr>
			<td>
				<table width="600">
					<tr>
						<th align="left">Product Name </th>
						<th align="left">Price </th>
						<th align="left">Qty. </th>
						<th align="left">Total</th>
					</tr>
				<?php
					foreach ($orders as $value) {
				?>
					<tr>
						<td><?php echo $value['p_name']; ?></td>
						<td><?php echo $value['p_price']; ?></td>
						<td><?php echo $value['qty']; ?></td>
						<td><?php echo $value['price_total']; ?></td>
					</tr>
				<?php
					$sub_total += $value['price_total'];
					}
				?>
					<tr>
						<td></td>
						<td colspan="2">Sub Total: </td>
						<td><?php echo $sub_total; ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2">Shipping Cost: </td>
						<td><?php echo $checkout['shipping_cost']; ?></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2">Total: </td>
						<td><?php echo $checkout['final_total']; ?></td>
					</tr>
				</table>
			</td>
			<td>
				<?php
				if ($checkout['order_status'] == 'cancel') {
				?><a href="process/delete_order_process.php?ch_id=<?php echo $checkout['ch_id'] ?>">Delete</a>
				<?php
				}
				else{
				?>
				<form action="process/update_status_process.php" method="post">
					<input type="hidden" name="ch_id" value="<?php echo $checkout['ch_id'];?>">
					<input type="hidden" name="qty" value="<?php echo $value['qty'];?>">
					<input type="hidden" name="pid" value="<?php echo $value['pid'];?>">
					<p>Change Status:
						<select name="order_status">
							<option value="pending">pending</option>
							<option value="confirm">Confirm</option>
							<option value="processing">Processing</option>
							<option value="complete">Complete</option>
							<option value="cancel">Cancel</option>
						</select>
					</p>
					<input type="submit" value="Change">
				</form>
			<?php } ?>
			</td>
		</tr>
	</center>
		
</table>
<?php require("include/footer.php"); ?>