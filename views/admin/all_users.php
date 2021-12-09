<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Products</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows']; ?>
<table class="content">
	<center>
		<h2 align="center">All Products</h2>
		<tr>
			<th>Profile Picture</th>
			<th>User's Name</th>
			<th>User's Email</th>
			<th>User's Phone</th>
			<th>User's Date of Birth</th>
			<th>User's Address</th>
			<th>User's City</th>
			<th>User's Postal</th>
			<th>User's Country</th>
			<th>Status</th>
			<th>Delete</th>
		</tr>
		<?php
			foreach ($value as $val) {
		?>
			<tr>
				<td align="center">
					<?php if ($val['pro_pic'] != "") { ?>
					<img src="<?php echo "../assets/userProPic/".$val['pro_pic']; ?>" width="80">
					<?php 
					}
					else{ 
					?>
					<img src="<?php e<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Products</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows']; ?>
<table class="content">
	<center>
		<h2 align="center">All Products</h2>
		<tr>
			<th>Profile Picture</th>
			<th>User's Name</th>
			<th>User's Email</th>
			<th>User's Phone</th>
			<th>User's Date of Birth</th>
			<th>User's Address</th>
			<th>User's City</th>
			<th>User's Postal</th>
			<th>User's Country</th>
			<th>Status</th>
			<th>Delete</th>
		</tr>
		<?php
			foreach ($value as $val) {
		?>
			<tr>
				<td align="center">
					<?php if ($val['pro_pic'] != "") { ?>
					<img src="<?php echo "../assets/userProPic/".$val['pro_pic']; ?>" width="80">
					<?php 
					}
					else{ 
					?>
					<img src="<?php echo "../assets/userProPic/default.jpg"; ?>" width="80">
					</a>
					<?php } ?>
				</td>
				<td><?php echo $val['full_name']; ?></td>
				<td><?php echo $val['email']; ?></td>
				<td><?php echo $val['phone']; ?></td>
				<td><?php echo $val['dob']; ?></td>
				<td><?php echo $val['address']; ?></td>
				<td><?php echo $val['city']; ?></td>
				<td><?php echo $val['postal']; ?></td>
				<td><?php echo $val['country']; ?></td>
				<td align="center">
					<b style="color:blue"><?php echo $val['status']; ?></b><br>
					<table align="center"> 
						<form action="process/update_user_status_process.php" method="post">
							<tr><td align="center"><input type="hidden" name="u_id" value="<?php echo $val['u_id'];?>">
							<b>Change:</b>
								<select name="status">
									<option value="pending" <?php if('pending'==$val['status']){echo 'selected';} ?>>Pending</option>
									<option value="active" <?php if('active'==$val['status']){echo 'selected';} ?>>Active</option>
									<option value="block" <?php if('block'==$val['status']){echo 'selected';} ?>>Block</option>
								</select></td></tr>
							<tr><td align="center"><input type="submit" value="Change"></td></tr>
						</form>	
					</table>									
				</td>
				<td><a href="process/del_user_process.php?email=<?php echo $val['email']; ?>">DEL</a></td>
			</tr>
		<?php
			}
		?>
	</center>
</table>
<?php require("include/footer.php"); ?>