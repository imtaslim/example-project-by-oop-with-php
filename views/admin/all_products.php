<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Products</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows']; ?>
<table class="content">
	<center>
		<h2 align="center">All Products</h2>
		<tr>
			<th>Product name</th>
			<th>Product category</th>
			<th>Product price</th>
			<th>Product stock</th>
			<th>Product brand</th>
			<th>Product image</th>
			<th>Actions</th>
		</tr>
		<?php
			foreach ($value as $val) {
		?>
			<tr>
				<td><?php echo $val['p_name']; ?></td>
				<td><?php echo $val['cat_name']; ?></td>
				<td><?php echo $val['p_price']; ?></td>
				<td><?php echo $val['p_stock']; ?></td>
				<td><?php echo $val['p_brand']; ?></td>
				<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Products</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows']; ?>
<table class="content">
	<center>
		<h2 align="center">All Products</h2>
		<tr>
			<th>Product name</th>
			<th>Product category</th>
			<th>Product price</th>
			<th>Product stock</th>
			<th>Product brand</th>
			<th>Product image</th>
			<th>Actions</th>
		</tr>
		<?php
			foreach ($value as $val) {
		?>
			<tr>
				<td><?php echo $val['p_name']; ?></td>
				<td><?php echo $val['cat_name']; ?></td>
				<td><?php echo $val['p_price']; ?></td>
				<td><?php echo $val['p_stock']; ?></td>
				<td><?php echo $val['p_brand']; ?></td>
				<td>
					<img src="<?php echo "../assets/products/".$val['p_pic']; ?>" width="50">
				</td>
				<td>
					<a href="edit_product.php?pid=<?php echo $val['pid']; ?>">Edit</a> |
					<a href="process/del_product_process.php?pid=<?php echo $val['pid']; ?>">Delete</a>
				</td>
			</tr>
		<?php
			}
		?>
	</center>
</table>
<?php require("include/footer.php"); ?>