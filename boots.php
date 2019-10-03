<?php include "menu.php"; ?>
	<h2>Snowboard Boots</h2>
	<p>	
				
	<img src="images/BurtonMoto.png"><br>
		<?php
		$boots1 = '<h3>Burton Moto</h3>'; 
		echo $boots1;
		echo '<br>';
		$bootprice1 = '<h4>199€</h4>';
		echo '<p>Price:</p>';
		echo $bootprice1;		
		?>
		<br>	
		<form class="" action="shoppingcart.php" method="post">
			<input type="number" name="Amount" value="" placeholder="Amount"> <br>
			<label><p>Size<p></label>
			<select class="" name="bootsize">
				<option value="40">40</option>
				<option value="42">42</option>
				<option value="44">44</option>
			</select>
			<br>
			<br>
			<input type="submit" name="" value="Add to Cart">
			<br>
			<br>
			<br>
			<br>
			<br>
		
		<img src="images/NitroVagabond.png"><br>		
		<?php
		$boots2 = '<h3>K2 Mach</h3>'; 
		echo $boots2;
		echo '<br>';
		$bootprice2 = '<h4>239€</h4>';
		echo '<p>Price:</p>';
		echo $bootprice2;		
		?>
		<br>	
		<form class="" action="shoppingcart.php" method="post">
			<input type="number" name="Amount" value="" placeholder="Amount"> <br>
			<label><p>Size<p></label>
			<select class="" name="bootsize">
				<option value="40">40</option>
				<option value="42">42</option>
				<option value="44">44</option>
			</select>
			<br>
			<br>
			<input type="submit" name="" value="Add to Cart">	
					
	</p>
	<?php include "footer.php"; ?>