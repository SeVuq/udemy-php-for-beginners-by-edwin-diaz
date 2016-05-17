<?php
$name = "SomeName";
$value = 100;
$expiration = time() + (60*60*24*7*4);
setcookie($name, $value, $expiration);
print_r($_COOKIE);
echo "<br/>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_COOKIE["SomeName"])) {
        $someOne = $_COOKIE["SomeName"];
        echo $someOne;
    } else {
        $someOne = "";
    }
    
?>
</body>
</html>