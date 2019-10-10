<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<?php
session_start();
$sql="SELECT * FROM products";
$products = $db->query($sql); 
?>

	<h2>Snowboards</h2>
	<p>	
				
		<img src="images/BurtonCustom.png"><br>

		<ul>
			<?php
			$row=array();
			foreach ($products as $row) {
				echo '<li>';
				echo $row['name'].'<br>';
				if(isset($_SESSION['logged_in'])){
					//echo '<a href="basket.php?id_products='.$row['id_products'].'">To basket</a>';
					echo '<form action="shoppingcart.php" method="post">';
					echo '<label>Amount:</label>';
					echo '<input type="number" name="amount"><br>';
					echo '<input type="hidden" name="id_products" value="'.$row['productid'].'"';
					echo '<br><input type="submit" value="Add to basket">';
					echo '</form>';
				}
				echo '</li>';
				echo '<hr>';
			}
			?>
		</ul>


		<?php
		$board1 = '<h3>Burton Custom 2020</h3>'; 
		echo $board1;
		echo '<br>';
		$stmt = $db->prepare ("SELECT price FROM product WHERE idproduct=1"); 
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_COLUMN);
		echo '<p>Price:</p>';
		echo '<br>';
		print_r($result);
		echo ' ';
		echo '€';
		echo '<br>'		
		?>		
		<br>

		<?php  	
			/*echo '<form class="" action="shoppingcart.php" method="post">';
			echo '<input type="number" name="Amount" value="" placeholder="Amount"> <br>';
			echo '<select class="" name="boardsize" placeholder="Size">';
					echo '<option value="150">$row['size'] cm</option>';
					<option value="156">156 cm</option>
					<option value="160">160 cm</option>
				</select>
				<br>
				<br>
				<input type="submit" name="" value="Add to Cart">
			</form>*/
			?>		
			<br>
			<br>
			<br>
			<br>
			<br>	
			
		<img src="images/NitroT1.png"><br>
		<?php
		$board2 = '<h3>Nitro T1</h3>'; 
		echo $board2;
		echo '<br>';
		$price2 = '<h4>549€</h4>';
		echo '<p>Price:</p>';
		echo $price2;		
		?>
		<br>	
		<form class="" action="shoppingcart.php" method="post">
			<input type="number" name="Amount" value="" placeholder="Amount"> <br>
			<select class="" name="boardsize" placeholder="Size">
				<option value="150">150 cm</option>
				<option value="156">156 cm</option>
				<option value="160">160 cm</option>
			</select>
			<br>
			<br>
			<input type="submit" name="" value="Add to Cart">
	</p>

	<?php include "footer.php"; ?>