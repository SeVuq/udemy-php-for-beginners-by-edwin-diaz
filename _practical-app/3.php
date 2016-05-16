<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $number = 3;
    if ($number % 3 == 1) {
        echo "1"."<br>";
    } elseif ($number % 3 == 2) {
        echo "2"."<br>";
    } else {
        echo "I love PHP"."<br>";
    }
    
    for ($i = 0; $i < 10; $i++) {
        echo $i."<br>";
    }
    
    $result = $number%5;
    switch($result) {
        case 0:
            break;
            echo "chia het";
        case 1:
            echo "du 1";
            break;
        case 2:
            echo "du 2";
            break;
        case 3:
            echo "du 3";
            break;
        case 4:
            echo "du 4";
            break;
    }
    ?>
</body>
</html>