<?php 
$users=["Khushi","Nikhil","Gola","Jyoti"];

foreach($users as $x){
    echo "<h3>".$x."</h3>";
    
    // if($x=="Nikhil"){
     //   break;
    // }
}

 foreach($users as $x):
    echo $x;
    echo "<br/>";
    endforeach
?>