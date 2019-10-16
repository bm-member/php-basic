<?php 

class Person {

    // properties
    public $name = 'Mg Mg';

    function __construct()
    {
        echo 'I am constructor.<br>';
    }

    function __destruct()
    {
        echo 'I am destructor.<br>';
    }
}

$person = new Person();
echo $person->name;
echo '<br>';
