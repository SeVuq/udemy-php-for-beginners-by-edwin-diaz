<?php
class Car {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    
    function moveWheels() {
        $this->wheels = 10;
        echo "Wheels are moving<br>";
    }
    
    function createDoors() {
        $this->doors = 6;
    }
}

if (method_exists('Car', 'moveWheels')) {
    echo "Yes"."<br>";
} else {
    echo "No"."<br>";
}

$bmw = new Car();
$truck = new Car();
// $bmw->wheels = 5;
$bmw->moveWheels();
$truck->createDoors();
echo $bmw->wheels."<br>";
echo $truck->doors."<br>";
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