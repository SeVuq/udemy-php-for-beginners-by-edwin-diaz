<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username && $password) {
        $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
        if ($connection) {
            echo "we are connected";
        } else {
            die("Database connection failed");
        }
    } else {
        echo "Please enter username & password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="col-sm-6">
            <form action="login.php" method="post">
                <div class="form-group">
                   <label for="username">Username</label>
                   <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                   <label for="password">Password</label>
                   <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>