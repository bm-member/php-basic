<?php

// Logical operators

var_dump(false and true); // false
echo "<br>";
var_dump(false or true); // true
echo "<br>";
var_dump(false && true); // false
echo "<br>";
var_dump(false || true); // true
echo "<br>";
$a = (1 == 2) || (3 < 5);
var_dump($a);
echo "<br>";

var_dump(1 == '1');
echo "<br>";
var_dump(1 !== '1');
