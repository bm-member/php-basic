<?php 

class Person {

    // properties
    public $name = 'Mg Mg';

    // method
    function hobby()
    {
        return 'Reading';
    }

}

$person = new Person();
echo $person->name; // Mg Mg
echo '<br>';
echo $person->hobby(); // Reading