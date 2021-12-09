<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Admin</title>
<?php require("include/header.php"); ?>
<table>
	<center>
		<h2 align="center">Add Admin</h2>
		<form action="process/add_admin_process.php" method="post">
			<tr>
				<td>Admin name:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Admin Email:</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Admin Password:</td>
				<td><input type="Password" name="pass"></td>
			</tr>
			<tr>
				<td>Admin Phone:</td>
				<td><input type="tel" name="phone"></td>
			</tr>
			<tr>
				<td>Admin Address:</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr>
				<td>Admin Roles:</td>
				<td>
					<input type="radio" name="admin_roles" value="admin">Admin
					<input type="radio" name="admin_roles" value="editor">Editor
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