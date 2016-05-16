<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $number1 = 10;
    $number2 = 20;
    
    echo $number1 + $number2."<br>";
    
    $array1 = [10, 20];
    $array2 = array('number1' => 10,
                   'number2' => 20);
    print_r($array1);
    echo "<br>";
    print_r($array2);
    ?>
</body>
</html>