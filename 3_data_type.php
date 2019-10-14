<?php

$s = "Mg Mg";
$i = 20;
$f = 123.123;
$b = true;
$arr = array(1, 2, 3); // 5.4 =<
$arr2 = [11, 22, 33]; // 5.4 >


var_dump($s);
echo "<br>";
var_dump($i);
echo "<br>";
var_dump($f);
echo $arr[0];
echo "<br>";
var_dump($arr);
echo "<br>";
echo "<pre>";
print_r($arr2);
echo "</pre>";

// echo "<pre>" . print_r($arr2, true) .  "</pre>";
