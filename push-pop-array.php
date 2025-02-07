<?php 

$users=["jyota","chandu","gola","goli"];

//print_r($users);
array_push($users,"goli","jyota","gola");

//array_pop($users);

array_splice($users,-4);
print_r($users);

?>