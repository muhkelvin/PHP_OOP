<?php
// Kelas Induk atau Superclass
class Animal {
    protected $name;
    protected $sound;

    public function __construct($name, $sound) {
        $this->name = $name;
        $this->sound = $sound;
    }

    public function makeSound() {
        echo "{$this->name} makes {$this->sound} sound.\n";
    }
}

// Kelas Anak atau Subclass mewarisi sifat-sifat dari kelas Animal
class Dog extends Animal {
    public function wagTail() {
        echo "{$this->name} wags its tail.\n";
    }
}

class Cat extends Animal {
    public function climbTree() {
        echo "{$this->name} climbs a tree.\n";
    }
}

// Membuat objek dari kelas anak
$dog = new Dog("Buddy", "woof");
$cat = new Cat("Whiskers", "meow");

// Memanggil metode dari kelas anak
$dog->makeSound(); // Output: Buddy makes woof sound.
$dog->wagTail();   // Output: Buddy wags its tail.

$cat->makeSound();   // Output: Whiskers makes meow sound.
$cat->climbTree();   // Output: Whiskers climbs a tree.
