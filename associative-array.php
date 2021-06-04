<?php
//Associstive Array
//Method 1
$a[0] =10;
$a['c'] ="computer";
$a['php'] = "web development";
$a[10] = "Ten";
$a[50] = 50.50;

//Method 2
//Always use this method to create an array
$a = array(
    0 => 10,
    "c" => "computer",
    "php" => "web development",
    10 => "Ten",
    50 => 50.50 
);
    
 //print value
echo "C for ".$a['c'];

foreach ($a as $value){
    echo "<br>Value is $value";
}

foreach ($a as $key => $value){
    echo "<br/>Key is <b>$key</b> and Value is $value";
}

