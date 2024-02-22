<?php

class Person{
    public $name;
    public $age;

    public function sayHello(string $name){
        echo "Hello $name, my name is $this->name";
    }
}

$kiri = new Person();
$kiri->name = "Kiri";
$kiri->age = 21;
$kiri->sayHello("Kelvin");
