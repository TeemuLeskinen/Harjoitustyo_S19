<?php include "menu.php"; ?>
	<h2>Snowboard Bindings</h2>
	<p>	
				
		<img src="images/Burton_Hitchhiker.png"><br>
		<?php
		$binding1 = '<h3>Burton Hitchhiker</h3>'; 
		echo $binding1;
		echo '<br>';
		$bindingprice1 = '<h4>299€</h4>';
		echo '<p>Price:</p>';
		echo $bindingprice1;		
		?>
		<br>	
		<form class="" action="shoppingcart.php" method="post">
			<input type="number" name="Amount" value="" placeholder="Amount"> <br>
			<select class="" name="bindingsize" placeholder="Size">
				<option value="S">S</option>
				<option value="M">M</option>
				<option value="L">L</option>
			</select>
			<br>
			<br>
			<input type="submit" name="" value="Add to Cart">
			<br>
			<br>
			<br>
			<br>
			<br>

		<img src="images/K2_Mach.png"><br>		
		<?php
		$binding2 = '<h3>K2 Mach</h3>'; 
		echo $binding2;
		echo '<br>';
		$bindingprice2 = '<h4>239€</h4>';
		echo '<p>Price:</p>';
		echo $bindingprice2;		
		?>
		<br>	
		<form class="" action="shoppingcart.php" method="post">
			<input type="number" name="Amount" value="" placeholder="Amount"> <br>
			<select class="" name="bindingsize" placeholder="Size">
				<option value="S">S</option>
				<option value="M">M</option>
				<option value="L">L</option>
			</select>
			<br>
			<br>
			<input type="submit" name="" value="Add to Cart">	
			
	</p>
	<?php include "footer.php"; ?>