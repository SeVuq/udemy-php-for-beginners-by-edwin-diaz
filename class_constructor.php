<?php
class Car {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    
    // This is the constructor function
    function __construct() {
        echo $this->wheels;
    }
    
    function moveWheels() {
        $this->wheels = 10;
        echo "Wheels are moving<br>";
    }
    
    function createDoors() {
        $this->doors = 6;
    }
}

$bmw = new Car();
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