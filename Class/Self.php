<?php

class Person{
    const AUTHOR = "Kelvin";

    function info(){
        echo "AUTHOR: ". self::AUTHOR;
    }
}

$person = new Person();
$person->info();