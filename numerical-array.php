<?php
//numerical array
//Method 1

$a[0]= 10;
$a[1]= 20;
$a[2]= 20.50;
$a[3]= "c";
$a[4]= "4";

//Method 2 //Dynamic Array
$a[]= 10;
$a[]= 20;
$a[]= 20.50;
$a[]= "c";
$a[]= "4";

//Method 3
//Always use this method to create an array

$a= array(10,20,30,"c","c++",10.50,"php");
//Print Array Value
echo $a[3];

//print whole array
for($i=0;$i<count($a);$i++){
echo "</br>".$a[$i];
}
  
// array sum and product
$sum= array_sum($a);
echo $sum;

//3 inbuilt functions to debug an array
echo"<pre>";
print_r($a);

echo "<pre>";
var_dump($a);
echo "<pre>";