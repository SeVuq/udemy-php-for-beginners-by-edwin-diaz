<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $var = "324234234234242342342342342323";
    $hashFormat = "$2y$10$";
    $salt = "thisismyfirstappthatusesencrypt";
    $hashF_and_salt = $hashFormat.$salt;
    $password = crypt($var, $hashF_and_salt);
    echo $password."<br>";
    if ($password == crypt($var, $password)) {
        echo "Password verified!";
    } else {
        echo "Wrong password!";
    }
    ?>
</body>
</html>