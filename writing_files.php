<?php
$file = "example.txt";
if ($handle = fopen($file, 'w')) {
    fwrite($handle, "I love PHP");
} else {
    echo "Cannot open file";
}
fclose($handle);
?>