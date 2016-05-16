<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    function greeting($message) {
        echo $message."<br>";
    }
    
    greeting(213);
    
    function addNumbers($number1, $number2) {
        $sum = $number1 + $number2;
        echo $sum;
    }
    
    addNumbers(48, 48);
    ?>
</body>
</html>