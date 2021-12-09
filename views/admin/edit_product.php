<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Products</title>
<?php require("include/header.php"); ?>
<?php
$value = $this->data['pro']['rows'][0]; 
$val = $this->data['cat']['rows']; 
?>
<table>
	<center>
		<h2 align="center">Edit Products</h2>
		<form action="process/edit_product_process.php?pid=<?php echo $value['pid']; ?>" method="post" enctype="multipart/form-data">
			<tr>
				<td>Product name:</td>
				<td><input type="text" name="p_name" value="<?php echo $value['p_name']; ?>"></td>
			</tr>
			<tr>
				<td>Product Category:</td>
				<td>
					<select name="cat_name">
						<option value="">Select <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Products</title>
<?php require("include/header.php"); ?>
<?php
$value = $this->data['pro']['rows'][0]; 
$val = $this->data['cat']['rows']; 
?>
<table>
	<center>
		<h2 align="center">Edit Products</h2>
		<form action="process/edit_product_process.php?pid=<?php echo $value['pid']; ?>" method="post" enctype="multipart/form-data">
			<tr>
				<td>Product name:</td>
				<td><input type="text" name="p_name" value="<?php echo $value['p_name']; ?>"></td>
			</tr>
			<tr>
				<td>Product Category:</td>
				<td>
					<select name="cat_name">
						<option value="">Select a category</option>
						<?php
							foreach ($val as $v) {
						?>
								<option value="<?php echo $v['cat_name']; ?>" <?php if($v['cat_name'] == $value['cat_name']){echo 'selected';} ?>><?php echo $v['cat_name']; ?></option>
						<?php	
							}
						?>
					</select>				
				</td>
			</tr>
			<tr>
				<td>Product Price:</td>
				<td><input type="text" name="p_price" value="<?php echo $value['p_price']; ?>"></td>
			</tr>
			<tr>
				<td>Product Description:</td>
				<td><textarea cols="35" rows="5" name="p_desc"><?php echo $value['p_desc'] ?></textarea></td>
			</tr>
			<tr>
				<td>Product Brand:</td>
				<td><input type="text" name="p_brand" value="<?php echo $value['p_brand']; ?>"></td>
			</tr>
			<tr>
				<td>Product Stock:</td>
				<td><input type="number" name="p_stock" value="<?php echo $value['p_stock']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><img src="<?php echo "../assets/products/".$value['p_pic']; ?>" width="50"></td>
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