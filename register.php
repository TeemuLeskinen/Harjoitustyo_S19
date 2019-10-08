<?php include "menu.php"; ?>
<?php include "connection.php"; ?>

<h2>Registration</h2><br>

<p>Fill in your information to register:</p><br>

<form class="" action="add_customer" method="post">
    <input type="text" name="user" value="" placeholder="Username"><br>
    <input type="password" name="password" value="" placeholder="Password"><br>
    <input type="text" name="fname" value="" placeholder="First Name"><br>
    <input type="text" name="lname" value="" placeholder="Last Name"><br>
    <input type="text" name="address" value="" placeholder="Address"><br>
    <input type="text" name="email" value="" placeholder="Email"><br>
    <input type="text" name="phone" value="" placeholder="Phone Number"><br>
    <br>
    <input type="submit" name="" value="Register">


</form>

<?php include "footer.php"; ?>
