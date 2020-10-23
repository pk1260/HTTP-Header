<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form name="inloggen" action="" method="POST">
    <input type="text" name="email" value="iemand@mail.com">
    <input type="password" name="password" value="wachtwoord">
    <input type="hidden" id="custId" name="custId" value="3487">
    <input type="submit" name="submit" value="inloggen">
</form>

<?php
    if (isset($_POST['submit'])) {
        echo "------ Backend -----";
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $customer_id = htmlspecialchars($_POST['cistId']);
        echo "<hr> email: $email";
        echo "<hr> wachtwoord: $password";
        echo "<hr> Customer ID: $customer_id";
    }
?>

</body>
</html>
