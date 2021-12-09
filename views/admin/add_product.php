<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Categories</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows']; ?>
<table>
	<center>
		<h2 align="center">Add Categories</h2>
		<form action="process/add_product_process.php" method="post" enctype="multipart/form-data">
			<tr>
				<td>Product name:</td>
				<td><input type="text" name="p_name"></td>
			</tr>
			<tr>
				<td>Product Category:</td>
				<td>
					<select name="cat_name">
						<option value=""<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Categories</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows']; ?>
<table>
	<center>
		<h2 align="center">Add Categories</h2>
		<form action="process/add_product_process.php" method="post" enctype="multipart/form-data">
			<tr>
				<td>Product name:</td>
				<td><input type="text" name="p_name"></td>
			</tr>
			<tr>
				<td>Product Category:</td>
				<td>
					<select name="cat_name">
						<option value="">Select a category</option>
						<?php
							foreach ($value as $v) {
								echo '<option value="'.$v['cat_name'].'">'.$v['cat_name'].'</option>';
							}
						?>
					</select>				
				</td>
			</tr>
			<tr>
				<td>Product Price:</td>
				<td><input type="text" name="p_price"></td>
			</tr>
			<tr>
				<td>Product Description:</td>
				<td><textarea cols="35" rows="5" name="p_desc"></textarea></td>
			</tr>
			<tr>
				<td>Product Brand:</td>
				<td><input type="text" name="p_brand"></td>
			</tr>
			<tr>
				<td>Product Stock:</td>
				<td><input type="number" name="p_stock"></td>
			</tr>
			<tr>
				<td>Product Image:</td>
				<td><input type="file" name="p_pic"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</center>
	</table>	
</form>

<?php require("include/footer.php"); ?>