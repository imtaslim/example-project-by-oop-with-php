<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update Profile</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows'][0]; ?>
<center>
	<?php
	function value($val){
		if($val != ""){
			echo $val;
		}
		return false;
	}
	?>
<h2 align="center">Update Profile</h2>
<form action="process/update_process.php" method="POST">
	<table>
		<tr<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update Profile</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows'][0]; ?>
<center>
	<?php
	function value($val){
		if($val != ""){
			echo $val;
		}
		return false;
	}
	?>
<h2 align="center">Update Profile</h2>
<form action="process/update_process.php" method="POST">
	<table>
		<tr>
			<td>Full name:</td>
			<td><input type="text" name="full_name" value="<?php value($value['full_name']); ?>"></td>
		</tr>
		<tr>
			<td>Phone:</td>
			<td><input type="text" name="phone" value="<?php value($value['phone']); ?>"></td>
		</tr>
		<tr>
			<td>gender:</td>
			<td>
				<input type="radio" name="gender" value="male" <?php if("male" == ($value['gender'])) {echo 'checked';} ?>>Male
				<input type="radio" name="gender" value="female" <?php if("female" == ($value['gender'])){echo 'checked';} ?>>Female
				<input type="radio" name="gender" value="other" <?php if("other" == ($value['gender'])){echo 'checked';} ?>>Other
			</td>
		</tr>
		<tr>
			<td>Date of Birth:</td>
			<td><input type="date" name="dob" value="<?php value($value['dob']); ?>"></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type="text" name="address" value="<?php value($value['address']); ?>"></td>
		</tr>
		<tr>
			<td>city:</td>
			<td><input type="text" name="city" value="<?php value($value['city']); ?>"></td>
		</tr>
		<tr>
			<td>Postal Code:</td>
			<td><input type="number" name="postal" value="<?php value($value['postal']); ?>"></td>
		</tr>
		<tr>
			<td>Country:</td>
			<td><input type="text" name="country" value="<?php value($value['country']); ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Update"></td>
		</tr>
	</table>
</form>
</center>
<?php require("include/footer.php"); ?>