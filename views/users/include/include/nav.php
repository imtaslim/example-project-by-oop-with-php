<?php
	$data = new Model();
	$whr = "email='".Session::getValue("email")."'";
	$admin_data = $data->select("admin","admin_roles",$whr);
	$admin_data = $admin_data['rows'][0]['admin_roles'];

	if ($admin_data != "admin") {
?>
		<ul class="nav">
			<li><a href="dashboard.php">Dashboard</a></li>
			<li>Categories
				<ul>
					<li><a href="all_categories.php">All Categories</a></li>
					<li><a href="add_category.php">Add Category</a></li>
				</ul>
			</li>
			<li>Products
				<ul>
					<li><a href="all_products.php">All Products</a></li>
					<li><a href="add_product.php">Add Produc<?php
	$data = new Model();
	$whr = "email='".Session::getValue("email")."'";
	$admin_data = $data->select("admin","admin_roles",$whr);
	$admin_data = $admin_data['rows'][0]['admin_roles'];

	if ($admin_data != "admin") {
?>
		<ul class="nav">
			<li><a href="dashboard.php">Dashboard</a></li>
			<li>Categories
				<ul>
					<li><a href="all_categories.php">All Categories</a></li>
					<li><a href="add_category.php">Add Category</a></li>
				</ul>
			</li>
			<li>Products
				<ul>
					<li><a href="all_products.php">All Products</a></li>
					<li><a href="add_product.php">Add Product</a></li>
				</ul>
			</li>
			<li><a href="all_orders.php">All Orders</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
<?php
	}
	else{
?>
		<ul class="nav">
			<li><a href="dashboard.php">Dashboard</a></li>
			<li><a href="all_users.php">All Users</a></li>
			<li><a href="all_admin.php">All Admins</a></li>
			<li>Categories
				<ul>
					<li><a href="all_categories.php">All Categories</a></li>
					<li><a href="add_category.php">Add Category</a></li>
				</ul>
			</li>
			<li>Products
				<ul>
					<li><a href="all_products.php">All Products</a></li>
					<li><a href="add_product.php">Add Product</a></li>
				</ul>
			</li>
			<li>Shipping
				<ul>
					<li><a href="all_shipping.php">View All</a></li>
					<li><a href="add_shipping.php">Add Shipping</a></li>
				</ul>
			</li>
			<li>Payment Method
				<ul>
					<li><a href="all_payMethod.php">View Payment Methods</a></li>
					<li><a href="add_payMethod.php">Add Payment Methods</a></li>
				</ul>
			</li>
			<li><a href="all_orders.php">All Orders</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
<?php
	}
?>