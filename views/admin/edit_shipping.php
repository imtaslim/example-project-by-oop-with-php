<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Shipping</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows'][0]; ?>
<table>
	<center>
		<h2 align="center">Edit Shipping</h2>
		<form action="process/edit_shipping_process.php?sid=<?php echo $value['sid']; ?>" method="post">
			<tr>
				<td>Country:</td>
				<td><input type="text" name="s_country" value="<?php echo $value['s_country']; ?>"></td>
			</tr>
			<tr>
				<td>City:</td>
				<td><input type="text" name="s_city" value="<?php echo $value['s_city']; ?>"></td>
			</tr>
			<tr>
				<td>Rate:</td>
				<td><input type="text" name="s_rate" value="<?php echo $value['s_rate']; ?>"></td>
			</tr>
			<tr>
				<td>Method:</td>
				<td><input type="text" name="s_method" value="<?php echo $value['s_method']; ?>"></td>
			</tr>
			<tr>
				<td>Shipping Time:</td>
				<td><input type="text" name="s_time" value="<?php echo $value['s_time']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</center>			
	</table>	
</form>
<?php require("include/footer.php"); ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Shipping</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows'][0]; ?>
<table>
	<center>
		<h2 align="center">Edit Shipping</h2>
		<form action="process/edit_shipping_process.php?sid=<?php echo $value['sid']; ?>" method="post">
			<tr>
				<td>Country:</td>
				<td><input type="text" name="s_country" value="<?php echo $value['s_country']; ?>"></td>
			</tr>
			<tr>
				<td>City:</td>
				<td><input type="text" name="s_city" value="<?php echo $value['s_city']; ?>"></td>
			</tr>
			<tr>
				<td>Rate:</td>
				<td><input type="text" name="s_rate" value="<?php echo $value['s_rate']; ?>"></td>
			</tr>
			<tr>
				<td>Method:</td>
				<td><input type="text" name="s_method" value="<?php echo $value['s_method']; ?>"></td>
			</tr>
			<tr>
				<td>Shipping Time:</td>
				<td><input type="text" name="s_time" value="<?php echo $value['s_time']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</center>			
	</table>	
</form>
<?php require("include/footer.php"); ?>