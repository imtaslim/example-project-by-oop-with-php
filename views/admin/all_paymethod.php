<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Payment Method</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows']; ?>
<table class="content">
	<center>
		<h2 align="center">All Payment Method</h2>
		<tr>
			<th>Payment Method</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php
			foreach ($value as $val) {
		?>
			<tr>
				<td><?php echo $val['pay_method']; ?></td>
				<td><a href="edit_paymethod.php?pay_id=<?php echo $val['pay_id']; ?>">Edit</a></td>
				<td><a href="process/del_paymethod_process.php?pay_id=<?php echo $val['pay_id']; ?>">Delete</a></td>
			</tr>
		<?php
			}
		?>
	</center>	
</table>
<?php require("include/footer.php"); ?>                                                                                                                                                                                                                               <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Payment Method</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows']; ?>
<table class="content">
	<center>
		<h2 align="center">All Payment Method</h2>
		<tr>
			<th>Payment Method</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php
			foreach ($value as $val) {
		?>
			<tr>
				<td><?php echo $val['pay_method']; ?></td>
				<td><a href="edit_paymethod.php?pay_id=<?php echo $val['pay_id']; ?>">Edit</a></td>
				<td><a href="process/del_paymethod_process.php?pay_id=<?php echo $val['pay_id']; ?>">Delete</a></td>
			</tr>
		<?php
			}
		?>
	</center>	
</table>
<?php require("include/footer.php"); ?>