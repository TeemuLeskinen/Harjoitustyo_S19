<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
	<h2>Snowboards</h2>
	<p>	
				
		<img src="images/BurtonCustom.png"><br>
		<?php
		$board1 = '<h3>Burton Custom 2020</h3>'; 
		echo $board1;
		echo '<br>';
		$result = ("SELECT price FROM product WHERE idproduct='1'"); //Ei toimi
		$price1 = $result->fetch(PDO::FETCH_COLUMN);
		//echo '<p>Price:</p>';
		echo $price1;		
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
				</form>
		
		
		
		
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