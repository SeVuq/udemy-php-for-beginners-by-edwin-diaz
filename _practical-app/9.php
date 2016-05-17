<?php
if (isset($_GET['id'])) {
    echo $_GET['id']."<br>";
}
$name = "cookiename";
$value = "cookievalue";
$expiration = time() + (60*60*24*7);
setcookie($name, $value, $expiration);
print_r($_COOKIE);
session_start();
echo $_SESSION['value'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <br><a href="9.php?id=1234">Click here</a>
</body>
</html>