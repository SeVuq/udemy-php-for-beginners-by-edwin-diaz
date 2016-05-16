<?php
class Car {
    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;
    
    function moveWheels() {
        $this->engine = 10;
    }
    
    function showProperty() {
        echo $this->hood."<br>";
    }
}

class Semi extends Car {
    function showProperty() {
        echo $this->engine."<br>";
    }
}

$bmw = new Car();
$semi = new Semi();
echo $bmw->wheels."<br>";
// echo $bmw->hood;
$bmw->showProperty();
$semi->showProperty();
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