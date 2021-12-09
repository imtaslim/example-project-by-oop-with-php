<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Orders</title>
<?php require("include/header.php"); ?>
	<form action="process/forPassEmail_process.php" method="post"> 
		<h1 align="center" style="color:green">Enter Your Email Address</h1>
		<center>
			<?php require("../checkers/msg.php"); ?>
		</center>
			<table ali<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Orders</title>
<?php require("include/header.php"); ?>
	<form action="process/forPassEmail_process.php" method="post"> 
		<h1 align="center" style="color:green">Enter Your Email Address</h1>
		<center>
			<?php require("../checkers/msg.php"); ?>
		</center>
			<table align="center">
				<tr>
					<td>Email Address</td>
					<td><input type="email" name="email" placeholder="Enter Email Address"></td>	
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Search"><input type="reset" value="Clear"></td>
				</tr>
			</table>
	</form>
<?php require("include/footer.php"); ?>