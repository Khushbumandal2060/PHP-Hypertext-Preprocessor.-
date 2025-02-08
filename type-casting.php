<?php 
$a=5;
//$a=(boolean) $a;
$a= (string) $a;

$b="300";
$b= (int) $b;

$c=1;
$c=(float) $c;

$d="hello";
$d=(boolean) $d;


$e=10;
$e=(array) $e;

$f=25;
$f=(object) $f;

$x=["30"];
$x=(string) $x;
var_dump($x);



?>