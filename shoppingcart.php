<?php 
session_start();
if(!isset($_SESSION['logged_in']))
{
	header('Location:not_logged.php');
}
?>
<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<h2>Shopping Cart</h2>
<p>
<?php 
$productid = $_POST['idproduct'];
$amount = $_POST['amount'];
$username = $_SESSION['username'];
//$brand = $_POST['brand'];
//$name = $_POST['name'];
	
echo 'Your Shopping Cart: <br>';
echo ''.$productid.'<br>';
echo ''.$amount.'<br>';

if(isset($_SESSION['logged_in'])){
	//echo '<a href="basket.php?idproduct='.$row['idproduct'].'">To basket</a>';
	echo '<br>';
	echo '<form action="order.php" method="post">';
	echo '<input type="hidden" name="amount" value="'.$amount.'"';
	echo '<input type="hidden" name="idproduct" value="'.$productid.'"';
	echo '<br>';
	echo '<br><input type="submit" value="Order">';
	echo '</form>';
}
//print_r($_POST);	
?>
</p>
	<?php include "footer.php"; ?>