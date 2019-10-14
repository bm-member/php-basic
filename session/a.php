<?php 

session_start();

//$name = "Mg Mg";
//echo $name;

$_SESSION['name'] = "Mg Mg";
$_SESSION['age'] = 20;
print_r($_SESSION);