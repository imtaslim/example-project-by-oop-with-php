<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Profile</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows'][0]; 
$val = $this->data['rows'][0]['pro_pic']; ?>
	<h2 align="center">Profile</h2>
<center>
	<table>
		<tr>
			<td colspan="2" align="center">
				<?php
				function value($val){
					if($val != ""){
						echo $val;
		<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Profile</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows'][0]; 
$val = $this->data['rows'][0]['pro_pic']; ?>
	<h2 align="center">Profile</h2>
<center>
	<table>
		<tr>
			<td colspan="2" align="center">
				<?php
				function value($val){
					if($val != ""){
						echo $val;
					}
					return false;
				}
				?>
				<?php if ($val != "") { ?>
					<a href="upload_photo.php">
						<img src="<?php echo "../assets/userProPic/".$value['pro_pic']; ?>" width="100">
					</a>
				<?php 
				}
				else{ 
				?>
					<a href="upload_photo.php">
						<img src="<?php echo "../assets/userProPic/default.jpg"; ?>" width="100">
					</a>
				<?php } ?>
			</td>
		</tr>	
		<tr>
			<td>Full name:</td>
			<td><?php value($value['full_name']); ?></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><?php value($value['email']); ?></td>
		</tr>
		<tr>
			<td>Phone:</td>
			<td><?php value($value['phone']); ?></td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td><?php value($value['gender']); ?></td>
		</tr>
		<tr>
			<td>Date of birth:</td>
			<td><?php value($value['dob']); ?></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><?php value($value['address']); ?></td>
		</tr>
		<tr>
			<td>City:</td>
			<td><?php value($value['city']); ?></td>
		</tr>
		<tr>
			<td>Postal:</td>
			<td><?php value($value['postal']); ?></td>
		</tr>
		<tr>
			<td>Country:</td>
			<td><?php value($value['country']); ?></td>
		</tr>
	</table>
</center>
<?php require("include/footer.php"); ?>