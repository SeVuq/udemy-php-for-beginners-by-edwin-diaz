<?php
$file = "example.txt";
if ($handle = fopen($file, 'r')) {
    $content = fread($handle, filesize($file)); // Each byte equals to a character
    echo $content;
} else {
    echo "Cannot open file";
}
fclose($handle);
?>