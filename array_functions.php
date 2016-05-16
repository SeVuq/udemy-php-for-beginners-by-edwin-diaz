<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $list = [123,123,12,31,23,123,12,3,123213123,213];
    echo max($list)."<br>";
    echo min($list)."<br>";
    sort($list);
    print_r($list);
    echo "<br>";
    
    echo "<a href='http://php.net/manual/en/ref.array.php'>php.net/manual/en/ref.array.php</a>";
    ?>
</body>
</html>