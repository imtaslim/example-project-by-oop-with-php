<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
<?php require("include/header.php"); ?>
<?php
	$value = $this->data['rows'][0];
	$val = $this->data['rows'][0]['pro_pic'];
 ?>
<table>
	<center>
		<h2 align="center">Dashboard</h2>
		<tr>
			<td colspan="2" align="center">
				<?php if ($val != "") { ?>
					<a href="upload_photo.php">
						<img src="<?php echo "../assets/adminProPic/".$value['pro_pic']; ?>" width="100">
					</a>
				<?php 
				}
				else{ 
				?>
					<a href="upload_photo.php">
						<img src="<?php echo "../assets/adminProPic/default.jpg"; ?>" width="100">
					</a>
				<?php } ?>
			</td>
		</tr>
		<tr>
			<td>Full name:</td>
			<td><?php echo $value['name']; ?></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><?php echo $value['email']; ?></td>
		</tr>
		<tr>
			<td>Phone:</td>
			<td><?php echo $value['phone']; ?></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><?php echo $value['address']; ?></td>
		</tr>
		<tr>
			<td>Admin Roles:</td>
			<td><?php echo $value['admin_roles']; ?></td>
		</tr>
	</center>	
</table>
<?php require("include/footer.php"); ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
<?php require("include/header.php"); ?>
<?php
	$value = $this->data['rows'][0];
	$val = $this->data['rows'][0]['pro_pic'];
 ?>
<table>
	<center>
		<h2 align="center">Dashboard</h2>
		<tr>
			<td colspan="2" align="center">
				<?php if ($val != "") { ?>
					<a href="upload_photo.php">
						<img src="<?php echo "../assets/adminProPic/".$value['pro_pic']; ?>" width="100">
					</a>
				<?php 
				}
				else{ 
				?>
					<a href="upload_photo.php">
						<img src="<?php echo "../assets/adminProPic/default.jpg"; ?>" width="100">
					</a>
				<?php } ?>
			</td>
		</tr>
		<tr>
			<td>Full name:</td>
			<td><?php echo $value['name']; ?></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><?php echo $value['email']; ?></td>
		</tr>
		<tr>
			<td>Phone:</td>
			<td><?php echo $value['phone']; ?></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><?php echo $value['address']; ?></td>
		</tr>
		<tr>
			<td>Admin Roles:</td>
			<td><?php echo $value['admin_roles']; ?></td>
		</tr>
	</center>	
</table>
<?php require("include/footer.php"); ?>