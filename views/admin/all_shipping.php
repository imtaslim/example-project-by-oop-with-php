<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Shipping</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows']; ?>
<table class="content">
	<center>
		<h2 align="center">All Shipping</h2>
		<tr>
			<th>Rated</th>
			<th>City</th>
			<th>Method</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php
			foreach ($value as $val) {
		?>
			<tr>
				<td><?php echo $val['s_rate']; ?></td>
				<td><?php echo $val['s_city']; ?></td>
				<td><?php echo $val['s_method']; ?></td>
				<td><a href="edit_shipping.php?sid=<?php echo $val['sid']; ?>">Edit</a></td>
				<td><a href="process/del_shipping_process.php?sid=<?php echo $val['sid']; ?>">Delete</a></td>
			</tr>
		<?php
			}
		?>
	</center>
		
</table>
<?php require("include/footer.php"); ?>                                                                                                                                                                                                                                                                                           <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Shipping</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows']; ?>
<table class="content">
	<center>
		<h2 align="center">All Shipping</h2>
		<tr>
			<th>Rated</th>
			<th>City</th>
			<th>Method</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php
			foreach ($value as $val) {
		?>
			<tr>
				<td><?php echo $val['s_rate']; ?></td>
				<td><?php echo $val['s_city']; ?></td>
				<td><?php echo $val['s_method']; ?></td>
				<td><a href="edit_shipping.php?sid=<?php echo $val['sid']; ?>">Edit</a></td>
				<td><a href="process/del_shipping_process.php?sid=<?php echo $val['sid']; ?>">Delete</a></td>
			</tr>
		<?php
			}
		?>
	</center>
		
</table>
<?php require("include/footer.php"); ?>