<?php require('public/include/inc.php'); ?>
	<title>Details</title>
	<?php require('public/include/header.php'); ?>
</td>
<td>
<h3>Single product page</h3>
<ul>
	<?php
	if(!Session::checkSession('email')){
		header("location:users/index.php");
	}
	
		if(isset($_GET['pid'])){
			$pid = $_GET['pid'];
		}
		else{
			header("index.php");
<?php require('public/include/inc.php'); ?>
	<title>Details</title>
	<?php require('public/include/header.php'); ?>
</td>
<td>
<h3>Single product page</h3>
<ul>
	<?php
	if(!Session::checkSession('email')){
		header("location:users/index.php");
	}
	
		if(isset($_GET['pid'])){
			$pid = $_GET['pid'];
		}
		else{
			header("index.php");
		}

		$arg = [
			"cols" =>"*",
			"tables" => ["products","categories"],
		 	"join" => "products.cid=categories.cid",
			"where" => [
				["products.pid","=",$pid]
			]
		];
		$products = $db->innerJoin($arg);

		// dd($products);
		// exit();

		foreach ($products["rows"] as $value) {
	?>
	<li class='prd'>
		<img src="assets/products/<?php echo $value['p_pic']; ?>" height="100"><br>
		<b><?php echo $value['p_name']; ?></b><br>
		Price: <?php echo $value['p_price']; ?><br>
		Product Description: <?php echo $value['p_desc']; ?><br>
		Brand: <?php echo $value['p_brand']; ?><br>
		In Stock: <?php echo $value['p_stock']; ?><br>

		<form action="public/process/cart_process.php" method="post">
			<input type="hidden" name="pid" value="<?php echo $value['pid']; ?>">
			<input type="number" name="qty" value="1" min="1"><br>
			<input type="submit" value="Add to Cart">
		</form>
	</li>
	<?php
		}
	?>
</ul>
<?php require('public/include/footer.php'); ?>