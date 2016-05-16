<?php
if (isset($_POST['submitbtn'])) {
    echo $_POST['submitbtn'];
    echo $_POST['username'];
    echo $_POST['password'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="6.php" method="post">
        <input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="password">
        <input type="submit" name="submitbtn">
    </form>
</body>
</html>