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

class Plane extends Car {
    var $wheels = 20;
}

$jet = new Plane();
// $jet->moveWheels();
echo $jet->wheels;

//if (class_exists('Plane')) {
//    echo "yes";
//}
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