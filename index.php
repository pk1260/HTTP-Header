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
    <input type="submit" name="submit" value="inloggen">
</form>

<?php
    if (isset($_POST['submit'])) {
        echo "------ Backend -----";
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        echo "<hr> email: $email";
        echo "<hr> wachtwoord: $password";
    }
?>

</body>
</html>
