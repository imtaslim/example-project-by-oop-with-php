<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Categories</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows'][0]; ?>
<table>
	<center>
		<h2 align="center">Edit Categories</h2>
		<form action="process/edit_category_process.php?cid=<?php echo $value['cid']; ?>" method="post">
			<tr>
				<td>Category name:</td>
				<td><input type="text" name="cat_name" value="<?php echo $value['cat_name']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</center>
	</table>	
</form>

<?php require("include/footer.php"); ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Categories</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows'][0]; ?>
<table>
	<center>
		<h2 align="center">Edit Categories</h2>
		<form action="process/edit_category_process.php?cid=<?php echo $value['cid']; ?>" method="post">
			<tr>
				<td>Category name:</td>
				<td><input type="text" name="cat_name" value="<?php echo $value['cat_name']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</center>
	</table>	
</form>

<?php require("include/footer.php"); ?>