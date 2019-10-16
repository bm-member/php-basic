<?php 

class Person 
{
    static $name = 'Mg Mg';

    static function hobby()
    {
        return 'Reading';
    }
}

echo Person::$name;
echo '<br>';
echo Person::hobby();