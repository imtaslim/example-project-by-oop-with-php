<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Categories</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows']; ?>
<table class="content">
	<center>
		<h2 align="center">All Categories</h2>
		<tr>
			<th>Category Id</th>
			<th>Category Name</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php
			foreach ($value as $val) {
		?>
			<tr>
				<td><?php echo $val['cid']; ?></td>
				<td><?php echo $val['cat_name']; ?></td>
				<td><a href="edit_category.php?cid=<?php echo $val['cid']; ?>">Edit</a></td>
				<td><a href="process/del_category_process.php?cid=<?php echo $val['cid']; ?>">Delete</a></td>
			</tr>
		<?php
			}
		?>
	</center>
</table>
<?php require("include/footer.php"); ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Categories</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows']; ?>
<table class="content">
	<center>
		<h2 align="center">All Categories</h2>
		<tr>
			<th>Category Id</th>
			<th>Category Name</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php
			foreach ($value as $val) {
		?>
			<tr>
				<td><?php echo $val['cid']; ?></td>
				<td><?php echo $val['cat_name']; ?></td>
				<td><a href="edit_category.php?cid=<?php echo $val['cid']; ?>">Edit</a></td>
				<td><a href="process/del_category_process.php?cid=<?php echo $val['cid']; ?>">Delete</a></td>
			</tr>
		<?php
			}
		?>
	</center>
</table>
<?php require("include/footer.php"); ?>