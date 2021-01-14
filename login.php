<?php
session_start();
$user = 'admin';
$pass = '5f4dcc3b5aa765d61d8327deb882cf99'; // md5('password')

if ($_POST['submit']) {
    if ($user == $_POST['username'] && $pass == md5($_POST['pass'])) {
        $_SESSION['admin'] = $user;
        header("Location: index.php");
        exit;
    } else {
        echo 'Incorrect login or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorisation</title>
</head>
<body>
    <form method="POST">
        <label for="username">Login</label>
        <input type="text " name="username" id="username"> <br />
        <label for="pass">Pass</label>
        <input type="text " name="pass" id="pass"> <br />
        <input type="submit" name="submit" value="Log in">
    </form>
</body>
</html>
