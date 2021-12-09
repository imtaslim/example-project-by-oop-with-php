<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel='icon' href='../assets/images/logo.png'></link>
	<style type="text/css">
		.prd{
			floa<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel='icon' href='../assets/images/logo.png'></link>
	<style type="text/css">
		.prd{
			float: left;
			margin: 5px;
			padding: 5px;
			border: 1px solid #ccc;
			text-align: center;
			list-style-type: none;
		}
		body {
			 background-image: url("../assets/images/background.jpg");
		}
	</style>
</head>
<body>
	<center>
		<table align="center">
		<tr>
			<td>
				<a href="../index.php">
				<img src="../assets/images/logo.png" height="180">
				</a>
			</td>
			<td>
				<img src="../assets/images/banner.png" height="180" width="1000">
				<hr>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<form action="process/register_process.php" method="post"> 
					<h1 align="center" style="color:green">Registration</h1>
					<center>
						<?php require("../checkers/msg.php"); ?>
					</center>
						<table align="center">
							<tr>
								<td>Full Name</td>
								<td><input type="text" name="full_name" placeholder="Enter Full Name"></td>	
							</tr>
							<tr>
								<td>Email Address</td>
								<td><input type="email" name="email" placeholder="Enter Email"></td>	
							</tr>
							<tr>
								<td>Password</td>
								<td><input type="password" name="pass" placeholder="Enter Password"></td>	
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" value="Register"><input type="reset" value="Clear"></td>
							</tr>
							<tr>
								<td></td>
								<td>Already a member? <a href="index.php">Login</a> here.</td>
							</tr>
						</table>
				</form>
				<p>Copyright: &copy; All Rights Reserved to Officeworks.com 2021</p>
			</td>
		</tr>
	</center>
</body>
</html>