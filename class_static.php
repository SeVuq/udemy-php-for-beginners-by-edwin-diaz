<?php
class Car {
    static $wheels = 4;
    var $hood = 1;
    
    function moveWheels() {
        Car::$wheels = 10;
        echo "Wheels are moving<br>";
    }
    
    static function staticMethod() {
        echo "This is a static method";
    }
}

$bmw = new Car();
// Won't work like a variable
// echo $bmw->wheels;
Car::moveWheels();
echo Car::$wheels;
Car::staticMethod();
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