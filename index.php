<?php include "menu.php"; ?>
<?php
	session_start();
	if(isset($_SESSION['logged_in']))
	{
		echo '<h2>Welcome to Snowboardshop.com <br> </h2>';
		echo '<h2>'.$_SESSION['username']. '</h2>';
	}
	else
	{
		echo '<h2>Welcome to Snowboardshop.com as a Guest</h2>';
		echo '<br>';
		echo '<br>';
		echo '<p> Please log in to start shopping</p>';
	}
?>

<?php include "footer.php"; ?>  