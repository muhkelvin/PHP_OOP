<?php

define("APPLICATION","belajar Oop");
const APP_VERSION = "1.0.0";

echo APPLICATION . " " . APP_VERSION;
echo APP_VERSION;


class Person
{
    const AUTHOR = "Kelvin";

    public string $name;
    public int $age;
}


$souya = new Person();
$souya->name = "souya";
$souya->age = 21;

echo "<br>" . Person::AUTHOR . " " . $souya->name . " " . $souya->age;