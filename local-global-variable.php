<?php 
$name="khushi";
function getName(){
   // $name="khushi";             ///local variable
    //echo $name;

   // $name="peter";
   global $name;
    echo "local var : $name";
}

echo $name;
echo "<br/>";
getName();
?>