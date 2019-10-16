<?php

class Person
{
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

class Man extends Person
{ 

}

$man = new Man();
$man->setName('Mg Mg');
echo $man->getName();
echo '<br>';

class Woman extends Person
{
    function hobby($hobby)
    {
        return $this->name . ' like ' . $hobby;
    }
}

$woman = new Woman();
$woman->setName('Aye Aye');
echo $woman->getName();
echo '<br>';
echo $woman->hobby('reading');
