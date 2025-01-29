<?php 
function sum($a, $b){
    echo $a+$b;
    echo "<br/>";
}

sum(10,20);
sum(15,23);
sum(20,40);


function userData($name,$color){
    echo "<h1 style='color:$color' >$name</h1>";
}

userData("Nikhil","blue");
userData("Singh","Orange");
?>