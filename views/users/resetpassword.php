<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reset Password</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows'][0]; ?>
<center>
<h2 align="center">Reset Password</h2>
<form action="process/resetpass_process.php" method="POST">
	<table>
		<tr>
			<td colspan="2"><input type="hidden" name="email" value="<?php echo $value['email']; ?>"></td>
		</tr>
		<tr>
			<td>New Password:</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td>Confirm New Password:</td>
			<td><input type="password" name="cpass"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Update"></td>
		</tr>
	</table>
</form>
</center>
<?php require("include/footer.php"); ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reset Password</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows'][0]; ?>
<center>
<h2 align="center">Reset Password</h2>
<form action="process/resetpass_process.php" method="POST">
	<table>
		<tr>
			<td colspan="2"><input type="hidden" name="email" value="<?php echo $value['email']; ?>"></td>
		</tr>
		<tr>
			<td>New Password:</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td>Confirm New Password:</td>
			<td><input type="password" name="cpass"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Update"></td>
		</tr>
	</table>
</form>
</center>
<?php require("include/footer.php"); ?>