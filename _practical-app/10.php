<?php
class Dog {
    var $feets = 4;
    var $eyesColor = "Brown";
    var $furColor = "White";
    
    function ShowAll() {
        echo $this->feets." ".$this->eyesColor." ".$this->furColor."<br>";
    }
}

$pitbull = new Dog();
$pitbull->ShowAll();
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