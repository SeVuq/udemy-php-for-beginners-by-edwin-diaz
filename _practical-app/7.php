<?php
$connection = mysqli_connect('localhost','root','','php_for_beginners_p7');
$query = "SELECT * FROM users";
if (!$connection) {
    die(mysqli_error($connection));
} else {
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die(mysqli_error($connection));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<pre>";
        echo $row['username'].": ".$row['password'];
        echo "</pre>";
    }
    ?>
</body>
</html>