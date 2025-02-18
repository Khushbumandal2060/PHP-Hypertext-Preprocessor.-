<?php 
$file="files/data.txt";
$myFile= fopen($file,"r") or die("unable to read file");
echo fread($myFile,filesize($file));
fclose($myFile);
?>

<form action="" method="post">
    <input type="file" name="file" />
    <br/>
    <br/>
    <button>Read File</button>
</form>
