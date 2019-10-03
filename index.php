<?php include "menu.php"; ?>
<?php
	session_start();
	if(isset($_SESSION['logged_in']))
	{
		echo '<h2>Welcome to Snowboardshop.com <br> </h2>';
		echo '<p>'.$_SESSION['username']. '</p>';
	}
	else
	{
		echo '<h2>Welcome to Snowboardshop.com as a Guest</h2>';
		echo '<br>';
		echo '<p> Please log in to start shopping</p>';
	}
?>

<?php include "footer.php"; ?>  