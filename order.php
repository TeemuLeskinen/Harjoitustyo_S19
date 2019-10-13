<?php include "menu.php"; ?>
<?php  
include 'connection.php';

$stmt = $db->prepare("INSERT INTO product_cart (idproduct, amount) 
VALUES (:idproduct, :amount)");
$stmt->bindParam(':idproduct', $_POST['idproduct']);
$stmt->bindParam(':amount', $_POST['amount']);
$stmt->execute();

echo '<p>Thank you for ordering</p>';

?>

<?php include "footer.php"; ?>