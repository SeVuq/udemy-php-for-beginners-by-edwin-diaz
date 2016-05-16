<?php
print_r($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    $id = 200000;
    $button = "CLICK YEAH";
    ?>
    <a href="get.php?id=<?php echo $id;?>&source=yeunoitro.net"><?php echo $button;?></a>
</body>
</html>