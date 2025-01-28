<?php 
$x=10;
 echo "before condition <br/>";

if($x==20){
    goto jump;
}
$name="khushi";
echo $name;
echo "<br/>";



jump:
echo "statement is jumped on line no. 15";

?>