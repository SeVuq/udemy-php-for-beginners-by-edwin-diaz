<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $number = array('juanita', 'maria', 'jose');
    print_r($number);
    echo "<br>";
    // echo $number[2]."<br>";
    
    $names = array("first_name" => 'Edwin',
                  "last_name" => 'Diaz');
    print_r($names);
    echo "<br>";
    $label = 'first_name';
    echo $names[$label] . " " . $names['last_name'];
    ?>
</body>
</html>