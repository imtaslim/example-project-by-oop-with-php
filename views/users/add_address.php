<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Addresses</title>
<?php require("include/header.php"); ?>
<?php
$value = $this->data['us']['rows']; 
$val = $this->data['add']['rows'];
$ar = array();
if ($value != $ar) {
	$value = $value[0];
}
else{
	$value['address'] = 0;
	$value['city'] = 0;
	$value['postal'] = 0;
	$value['country'] = 0;
	$value['phone'] = 0;
}
if ($val != $ar) {
	$val = $val[0];
}
else{
	$val['b_address'] = 0;
	$val['b_city'] = 0;
	$val['b_postal'] = 0;
	$val['b_country'] = 0;
	$val['b_phone'] = 0;
}
?>
<center>
	<?p<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Addresses</title>
<?php require("include/header.php"); ?>
<?php
$value = $this->data['us']['rows']; 
$val = $this->data['add']['rows'];
$ar = array();
if ($value != $ar) {
	$value = $value[0];
}
else{
	$value['address'] = 0;
	$value['city'] = 0;
	$value['postal'] = 0;
	$value['country'] = 0;
	$value['phone'] = 0;
}
if ($val != $ar) {
	$val = $val[0];
}
else{
	$val['b_address'] = 0;
	$val['b_city'] = 0;
	$val['b_postal'] = 0;
	$val['b_country'] = 0;
	$val['b_phone'] = 0;
}
?>
<center>
	<?php
	function value($ch){
		if($ch != ""){
			echo $ch;
		}
		echo "";
	}
	?>
<h2 align="center">Add Addresses</h2>
<form action="process/add_address_process.php" method="POST">
	<table>
		<tr>
			<td colspan="2" align="center"><b>Parmanent Contact</b></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type="text" name="address" value="<?php value($value['address']); ?>"></td>
		</tr>
		<tr>
			<td>City:</td>
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
			<td>Phone:</td>
			<td><input type="text" name="phone" value="<?php value($value['phone']); ?>"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><b>Billing Contact</b></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type="text" name="b_address" value="<?php value($val['b_address']); ?>"></td>
		</tr>
		<tr>
			<td>City:</td>
			<td><input type="text" name="b_city" value="<?php value($val['b_city']); ?>"></td>
		</tr>
		<tr>
			<td>Postal Code:</td>
			<td><input type="number" name="b_postal" value="<?php value($val['b_postal']); ?>"></td>
		</tr>
		<tr>
			<td>Country:</td>
			<td><input type="text" name="b_country" value="<?php value($val['b_country']); ?>"></td>
		</tr>
		<tr>
			<td>Phone:</td>
			<td><input type="text" name="b_phone" value="<?php value($val['b_phone']); ?>"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Update"></td>
		</tr>
	</table>
</form>
</center>
<?php require("include/footer.php"); ?>