<?php include "menu.php"; ?>
<?php  
//print_r($_POST);
include 'connection.php';

$encrypted_pass = password_hash($_POST['password'],PASSWORD_DEFAULT);
$stmt = $db->prepare("INSERT INTO customer (username, password, firstname, lastname, address, email, phonenumber) 
VALUES (:username, :password, :firstname, :lastname, :address, :email, :phonenumber)");
$stmt->bindParam(':username', $_POST['user']);
$stmt->bindParam(':password', $encrypted_pass);
$stmt->bindParam(':firstname', $_POST['fname']);
$stmt->bindParam(':lastname', $_POST['lname']);
$stmt->bindParam(':address', $_POST['address']);
$stmt->bindParam(':email', $_POST['email']);
$stmt->bindParam(':phonenumber', $_POST['phone']);
$stmt->execute();


echo '<p>Thank you for registering</p>';
?>

<?php include "footer.php"; ?>



