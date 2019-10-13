<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<?php
session_start();
$sql="SELECT * FROM product WHERE idproductcategory = '2'";
$products = $db->query($sql); 
?>
	<h2>Snowboard Boots</h2>
	<p>
	<ul>
			<?php
			
			foreach ($products as $row) {
				echo '<ul>';
				echo '<img src="images/'.$row['image'].'" alt="product image"> <br>';
				echo '<h3>';
				echo $row['brand'].'';
				echo ' ';
				echo $row['name'].'<br>';
				echo '</h3>';
				echo '<p>';
				echo 'Size: ';
				echo $row['size'].'<br>';
				echo $row['price'].' € <br>';
				echo 'Stock: ';
				echo $row['stock'].'<br>';
				echo '</p>';
				echo '<br>';
				
				if(isset($_SESSION['logged_in'])){
					//echo '<a href="basket.php?idproduct='.$row['idproduct'].'">To basket</a>';
					echo '<br>';
					echo '<form action="shoppingcart.php" method="post">';
					echo '<label>Amount:</label>';
					echo '<input type="number" name="amount"><br>';
					echo '<input type="hidden" name="idproduct" value="'.$row['idproduct'].'"';
					echo '<br>';
					echo '<p>';
					echo '<br><input type="submit" value="Add to basket">';
					echo '</p>';
					echo '</form>';
				}
				echo '</ul>';
				echo '<hr>';
			}
			?>
		</ul>		
				
		
					
	</p>
	<?php include "footer.php"; ?>