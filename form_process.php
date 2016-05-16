<?php
if (isset($_POST['submit'])) {
//    echo "yes it works<br>";
//    echo $_POST['username']."<br>";
//    echo $_POST['password']."<br>";
    $names = array("Edwin", "Student", "Peter", "Samid", "Mohad", "Maria", "Jane", "Tom");
    $minLen = 5;
    $maxLen = 10;
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (strlen($username) < $minLen || strlen($username) > $maxLen) {
        echo "Username has to be between 5 and 10";
    }
    
    if (!in_array($username, $names)) {
        echo "Sorry you are not allowed";
    } else {
        echo "Welcome!";
    }
}
?>