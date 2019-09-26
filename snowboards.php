<?php include "menu.php"; ?>
	<h2>Snowboards</h2>
	<p>	
		<h4>Burton Free Thinker 2020</h4>		
		<img src="images/BurtonCustom.png"><br>		
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
			<br>
			<br>
			<br>
			
			<h4>Nitro T1</h4>		
			<img src="images/NitroT1.png"><br>
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