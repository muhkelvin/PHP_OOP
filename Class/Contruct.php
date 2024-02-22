<?php

use http\Encoding\Stream\Inflate;

class Person
{
    public $name;
    public $age;

    public function __construct(string $name,?int $age){
        $this->name = $name;
        $this->age = $age;

        echo "Hello I'm  $name $age years old";
    }
}

$kelvin = new Person("Kelvin",21);
