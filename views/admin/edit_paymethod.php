<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Payment Method</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows'][0]; ?>
<table>
	<center>
		<h2 align="center">Edit Payment Method</h2>
		<form action="process/edit_paymethod_process.php?pay_id=<?php echo $value['pay_id']; ?>" method="post">
			<tr>
				<td>Category name:</td>
				<td><input type="text" name="pay_method" value="<?php echo $value['pay_method']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</center>
	</table>	
</form>

<?php require("inclu<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Payment Method</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows'][0]; ?>
<table>
	<center>
		<h2 align="center">Edit Payment Method</h2>
		<form action="process/edit_paymethod_process.php?pay_id=<?php echo $value['pay_id']; ?>" method="post">
			<tr>
				<td>Category name:</td>
				<td><input type="text" name="pay_method" value="<?php echo $value['pay_method']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</center>
	</table>	
</form>

<?php require("include/footer.php"); ?>