<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Orders</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows']; ?>
<table class="content">
	<center>
		<h2 align="center">All Orders</h2>
		<tr>
			<th>Order Id</th>
			<th>User Email</th>
			<th>Payment Method</th>
			<th>Cost</th>
			<th>Order Status</th>
			<th>Order Time</th>
			<th>Actions</th>
		</tr>

		<?php
			foreach ($value as $val) {
		?>
			<tr>
				<td><?php echo $val['ch_id']; ?></td>
				<td><?php echo $val['u_email']; ?></td>
				<td><?php echo $val['pay_method']; ?></td>
				<td><?php echo $val['final_total']; ?></td>
				<td><?php echo $val['order_status']; ?></td>
				<td><?php echo $val['checkout_time']; ?></td>
				<td<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Orders</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows']; ?>
<table class="content">
	<center>
		<h2 align="center">All Orders</h2>
		<tr>
			<th>Order Id</th>
			<th>User Email</th>
			<th>Payment Method</th>
			<th>Cost</th>
			<th>Order Status</th>
			<th>Order Time</th>
			<th>Actions</th>
		</tr>

		<?php
			foreach ($value as $val) {
		?>
			<tr>
				<td><?php echo $val['ch_id']; ?></td>
				<td><?php echo $val['u_email']; ?></td>
				<td><?php echo $val['pay_method']; ?></td>
				<td><?php echo $val['final_total']; ?></td>
				<td><?php echo $val['order_status']; ?></td>
				<td><?php echo $val['checkout_time']; ?></td>
				<td>
					<a href="single_order.php?ch_id=<?php echo $val['ch_id']; ?>">View</a>
				</td>
			</tr>
		<?php
			}
		?>
	</center>
</table>
<?php require("include/footer.php"); ?>