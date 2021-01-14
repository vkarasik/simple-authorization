<?php
session_start();
if ($_GET['do'] == 'logout') {
    unset($_SESSION['admin']);
    session_destroy();
}
if ($_SESSION['admin'] != 'admin') {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
</head>
<body>
    <p>You're Loged In</p>
    <a href="index.php?do=logout">Logout</a>
</body>
</html>
