<?php 

class Person 
{
    public $name = 'Mg Mg';
    private $age = 20;
    protected $address = 'Yangon';

    function getAge()
    {
        return $this->age;
    }
}

$person = new Person();
echo $person->name . '<br>';
//echo $person->age;
//echo $person->address;
echo $person->getAge() . '<br>';

class Man extends Person
{
    function getAddess()
    {
        return $this->address;
    }
}

$man = new Man();
echo $man->name . '<br>';
// echo $man->age;
// echo $man->address;
echo $man->getAddess();