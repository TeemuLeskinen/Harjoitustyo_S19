<?php include "menu.php"; ?>
<?php
    session_start();
    session_destroy();
    echo '<p> You are now logged out</p>';
?>

<?php include "footer.php"; ?>