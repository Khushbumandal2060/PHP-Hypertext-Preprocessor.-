<?php 
$users=[
    ["name"=>"Nikhil","age"=>"21","district"=>"Rautahat","email"=>"singhsansar@Gmail.com"],
    ["name"=>"jyoti","age"=>"19","district"=>"Sarlahi","email"=>"jyotimandal144@gmail.com"],
    ["name"=>"Golu","age"=>"19","district"=>"Sarlahi","email"=>"golumandal322@gmail.com"],
];

foreach($users as $user){
    foreach($user as $key=> $item){
    echo "$key is $item";
    echo "<br/>";
 }

 echo "<br/>"; echo "<br/>";
}


?>