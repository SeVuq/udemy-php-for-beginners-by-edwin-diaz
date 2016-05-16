<?php
$name = "SomeName";
$value = 100;
$expiration = time() + (60*60*24*7);
setcookie($name, $value, $expiration);
print_r($_COOKIE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>