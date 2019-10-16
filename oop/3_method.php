<?php 

class Person {

    // properties
    public $name;

    // method
    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }
}

$person = new Person();
$person->setName('Mg Mg');
echo $person->getName();