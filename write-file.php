<?php 
$fileName = "dummy.txt"; 
$content = "files/this is a dummy file"; // Corrected semicolon

$file = fopen($fileName, "w") or die("Unable to create file"); 
fwrite($file, $content); 
fclose($file);

echo "File created successfully"; 
?>
