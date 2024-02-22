<?php
// Mendefinisikan interface
interface Hewan {
    // Metode yang harus diimplementasikan oleh kelas yang menggunakan interface ini
    public function bersuara();
    public function name();
}

// Kelas Kucing yang mengimplementasikan interface Hewan
class Kucing implements Hewan {
    // Implementasi metode bersuara
    public function bersuara() {
        echo "Meow!\n";
    }

    public function name()
    {
        echo "Kucing";
    }
}

// Kelas Anjing yang mengimplementasikan interface Hewan
class Anjing implements Hewan {
    // Implementasi metode bersuara
    public function bersuara() {
        echo "Woof!\n";
    }

    public function name()
    {
        echo "Anjing";
    }
}

// Membuat objek kelas Kucing dan Anjing
$kucing = new Kucing();
$anjing = new Anjing();

// Memanggil metode bersuara untuk kelas Kucing dan Anjing
$kucing->bersuara(); // Output: Meow!
$anjing->bersuara(); // Output: Woof!
$kucing->name();
$anjing->name();
