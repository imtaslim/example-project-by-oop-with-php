<?php require('public/include/inc.php'); ?>
	<title>Home</title>
	<?php require('public/include/header.php'); ?>
		<ul>
		<?php
			foreach ($categories["rows"] as $value) {
			echo "<li><a href='index.php?cid=".$value["cid"]."'>".$value["cat_name"]."</a></li>";
			}
		?>
		</ul>
	</td>
	<td>
		<ul>
			<?php
			if(!isset($_GET['cid'])){
				$data = $db->select("products","*");

				foreach ($data['rows'] as $val) { ?>
					<li class='prd'>
						<img src="assets/products/<?php e<?php require('public/include/inc.php'); ?>
	<title>Home</title>
	<?php require('public/include/header.php'); ?>
		<ul>
		<?php
			foreach ($categories["rows"] as $value) {
			echo "<li><a href='index.php?cid=".$value["cid"]."'>".$value["cat_name"]."</a></li>";
			}
		?>
		</ul>
	</td>
	<td>
		<ul>
			<?php
			if(!isset($_GET['cid'])){
				$data = $db->select("products","*");

				foreach ($data['rows'] as $val) { ?>
					<li class='prd'>
						<img src="assets/products/<?php echo $val['p_pic']; ?>" height="100"><br>
						<?php echo $val['p_name']; ?><br>
						<strong>Price: </strong><?php echo $val['p_price']; ?><br>
						
						<?php if ($val['p_stock'] < 1) {
							echo '<b style="color:red">Out of Stock</b>';
						}
						else{
						?>
						<strong>Stock: </strong><?php echo $val['p_stock']; ?><br>
						<form action="public/process/cart_process.php" method="post">
							<input type="hidden" name="pid" value="<?php echo $val['pid']; ?>">
							<input type="hidden" name="qty" value="1" min="1"><br>
							<input type="submit" value="Add to Cart">
						</form>
						<button><a href="single_product.php?pid=<?php echo $val['pid']; ?>">View</a></button>
						<?php } ?>
					</li>
				<?php
				}

			}
			else{
				// $cid = $categories['rows'][0]['cid'];
				$cid = $_GET['cid'];

			$arg = [
				"cols" => "*",
				"tables" => ["categories", "products"],
				"join" => "categories.cid=products.cid",
				"where" => [
					["categories.cid","=",$cid]
				]
			];

			$products = $db->innerJoin($arg);

			foreach ($products['rows'] as $value) {
			?>
			<li class='prd'>
				<img src="assets/products/<?php echo $value['p_pic']; ?>" height="100"><br>
				<?php echo $value['p_name']; ?><br>
				<strong>Price: </strong><?php echo $value['p_price']; ?><br>
				<?php if ($value['p_stock'] < 1) {
						echo '<b style="color:red">Out of Stock</b>';
					}
					else{
					?>
					<strong>Stock: </strong><?php echo $value['p_stock']; ?><br>
					<form action="public/process/cart_process.php" method="post">
						<input type="hidden" name="pid" value="<?php echo $value['pid']; ?>">
						<input type="hidden" name="qty" value="1" min="1"><br>
						<input type="submit" value="Add to Cart">
					</form>
					<button><a href="single_product.php?pid=<?php echo $value['pid']; ?>">View</a></button>
					<?php } ?>
			</li>
			<?php 
				}
			}
			?>
		</ul>
<?php require('public/include/footer.php'); ?>