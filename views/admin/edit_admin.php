<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Admin</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows'][0]; ?>
<table>
	<center>
		<h2 align="center">Edit Admin</h2>
		<form action="process/edit_admin_process.php?aid=<?php echo $value['aid']; ?>" method="post">
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" value="<?php echo $value['name']; ?>"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email" value="<?php echo $value['email']; ?>"></td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td><input type="text" name="phone" value="<?php echo $value['phone']; ?>"></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><input type="text" name="address" value="<?php echo $value['address']; ?>"></td>
			</tr>
			<tr>
				<td>Admin Roles:</td>
				<td>
					<input type="radio" name="admin_roles" value="admin" <?php if("admin" == ($value['admin_roles'])) {echo 'checked';} ?>>Admin
					<input type="radio" name="admin_roles" value="editor" <?php if("editor" == ($value['admin_roles'])){echo 'checked';} ?>>Editor
				</td>
			</tr>
			<tr><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Admin</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows'][0]; ?>
<table>
	<center>
		<h2 align="center">Edit Admin</h2>
		<form action="process/edit_admin_process.php?aid=<?php echo $value['aid']; ?>" method="post">
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" value="<?php echo $value['name']; ?>"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email" value="<?php echo $value['email']; ?>"></td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td><input type="text" name="phone" value="<?php echo $value['phone']; ?>"></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><input type="text" name="address" value="<?php echo $value['address']; ?>"></td>
			</tr>
			<tr>
				<td>Admin Roles:</td>
				<td>
					<input type="radio" name="admin_roles" value="admin" <?php if("admin" == ($value['admin_roles'])) {echo 'checked';} ?>>Admin
					<input type="radio" name="admin_roles" value="editor" <?php if("editor" == ($value['admin_roles'])){echo 'checked';} ?>>Editor
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</center>			
	</table>	
</form>
<?php require("include/footer.php"); ?>