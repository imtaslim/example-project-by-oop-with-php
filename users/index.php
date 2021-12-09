<!DOCTYPE html>
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
			list-style-type<!DOCTYPE html>
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
				<h1 align="center" style="color:green">LogIn</h1>
				<center>
					<?php require("../checkers/msg.php"); ?>
				</center>
					<form action="process/login_process.php" method="post"> 
						<table align="center">
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
								<td><input type="checkbox" name="remember">Remember Me</td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" value="Login"><input type="reset" value="Clear"></td>
							</tr>
							<tr>
								<td></td>
								<td>Forget Password? <a href="forgetPasswordEmail.php">Reset</a> it.</td>
							</tr>
							<tr>
								<td></td>
								<td>New member? <a href="register.php">Register</a> here.</td>
							</tr>
						</table>
					</form>
					<p>Copyright: &copy; All Rights Reserved to Officeworks.com 2021</p>
			</td>
		</tr>
	</center>
</body>
</html>