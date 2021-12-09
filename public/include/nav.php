<?php
	if(Session::checkSession("email")){
?>
<a href="index.php">Home</a> | 
<a href="cart.php">Cart</a> | 
<a href="users/my_orders.php">My Orders</a> | 
<a href="users/profile.php">Profile</a> | 
<a href="users/password_update.php">Update Password</a> | 
<a href="users/update.php">Update</a> | 
<a href="users/logout.php">Logout</a> 
<?php
	}
	else{
?>
<a href="index.php">Home</a> | 
<a href<?php
	if(Session::checkSession("email")){
?>
<a href="index.php">Home</a> | 
<a href="cart.php">Cart</a> | 
<a href="users/my_orders.php">My Orders</a> | 
<a href="users/profile.php">Profile</a> | 
<a href="users/password_update.php">Update Password</a> | 
<a href="users/update.php">Update</a> | 
<a href="users/logout.php">Logout</a> 
<?php
	}
	else{
?>
<a href="index.php">Home</a> | 
<a href="users/index.php">User login</a> | 
<a href="users/register.php">Register</a>
<?php		
	}
?>
