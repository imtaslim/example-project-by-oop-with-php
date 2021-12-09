<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Admin</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows']; ?>
<table class="content">
	<center>
		<h2 align="center">All Admin</h2>
		<tr>
			<th>Profile Picture</th>
			<th>Admin's Name</th>
			<th>Admin's Email</th>
			<th>Admin's Phone</th>
			<th>Admin's Address</th>
			<th>Admin's Roles</th>
			<th>Actions</th>
		</tr>
		<?php
			foreach ($value as $key => $val) {
		?>
			<tr>
				<td align="center">
					<?php if ($val['pro_pic'] != "") { ?>
					<img src="<?php echo "../assets/adminProPic/".$val['pro_pic']; ?>" width="50">
					<?php 
					}
					else{ 
					?>
					<img src="<?php echo "../assets/adminProPic/default.jpg"; ?>" width="50">
					</a>
					<?php } ?>
				</td>
				<td><?php echo $val['name']; ?></td>
				<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Admin</title>
<?php require("include/header.php"); ?>
<?php $value = $this->data['rows']; ?>
<table class="content">
	<center>
		<h2 align="center">All Admin</h2>
		<tr>
			<th>Profile Picture</th>
			<th>Admin's Name</th>
			<th>Admin's Email</th>
			<th>Admin's Phone</th>
			<th>Admin's Address</th>
			<th>Admin's Roles</th>
			<th>Actions</th>
		</tr>
		<?php
			foreach ($value as $key => $val) {
		?>
			<tr>
				<td align="center">
					<?php if ($val['pro_pic'] != "") { ?>
					<img src="<?php echo "../assets/adminProPic/".$val['pro_pic']; ?>" width="50">
					<?php 
					}
					else{ 
					?>
					<img src="<?php echo "../assets/adminProPic/default.jpg"; ?>" width="50">
					</a>
					<?php } ?>
				</td>
				<td><?php echo $val['name']; ?></td>
				<td><?php echo $val['email']; ?></td>
				<td><?php echo $val['phone']; ?></td>
				<td><?php echo $val['address']; ?></td>
				<td><?php echo $val['admin_roles']; ?></td>
				<td>
					<?php if($key != 0){
						?>
					<a href="edit_admin.php?aid=<?php echo $val['aid']; ?>">Edit</a> |
					<a href="process/del_admin_process.php?aid=<?php echo $val['aid']; ?>">Delete</a>
					<?php
					}
					else{
						echo "No Action Neaded";
					} ?>
				</td>
			</tr>
			<?php
				}
			?>
			<tr>
				<td colspan="7" align="center"><a href="add_admin.php">Add a new Admin</a></td>
			</tr>
	</center>
</table>
<?php require("include/footer.php"); ?>