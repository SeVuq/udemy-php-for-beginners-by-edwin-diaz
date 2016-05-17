<?php
class Car {
    function moveWheels() {
        echo "Wheels are moving";
    }
}

if (method_exists('Car', 'moveWheels')) {
    echo "Yes";
} else {
    echo "No";
}
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