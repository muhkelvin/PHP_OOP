<?php

class Proper{

    public $name;
    public $age;

}

$properties = new Proper();
$properties->name = "Kelvin";
$properties->age = 21;

echo "Name {$properties->name} and age {$properties->age}";