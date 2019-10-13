<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<?php
    $annettu_salasana=$_POST['password'];
    $annettu_tunnus=$_POST['username'];
    //$oikea_salasana='projekti123';

    $stmt = $db->prepare("SELECT password FROM customer WHERE username=username");
    $stmt->bindParam('username', $annettu_tunnus);
    $stmt->execute();
    $oikea_salasana = $stmt->fetch(PDO::FETCH_COLUMN);
    
    
    if(password_verify($annettu_salasana,$oikea_salasana))
    {
        session_start();
        $_SESSION['logged_in']=TRUE;
        $_SESSION['username']=$annettu_tunnus;
        $link_address1 = 'index.php';
        echo '<p>You Are Now Logged In</p>';
    
    }
    else{
        echo '<p>Incorrect username or password</p>';
        echo '<form class="" action="login_form.php" method="post">'; //Käyttäjä voi kokeilla uudestaan
        echo '<input type="submit" name="" value="Try again">';
        echo '</form>';
    }
?>
<?php include "footer.php"; ?>    