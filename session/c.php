<?php 

session_start();

// echo $name;

//unset($_SESSION['name']); // delete one

session_destroy();



print_r($_SESSION);