<?php
class Manager {
    public string $name;

    // Constructor untuk kelas Manager
    public function __construct(string $name) {
        $this->name = $name;
    }

    // Metode untuk Manager
    public function sayHello(string $name) {
        echo "Halo $name, nama saya adalah Manager {$this->name}\n";
    }
}

class Employee extends Manager {
    // Metode untuk Employee yang melakukan override
    public function sayHello(string $name) {
        echo "Halo $name, nama saya adalah Employee {$this->name}\n";
    }
}

// Membuat objek Manager
$manager = new Manager("Souya");
$manager->sayHello("Rizky");

// Membuat objek Employee
$employee = new Employee("Kelvin");
$employee->sayHello("Rahma");
