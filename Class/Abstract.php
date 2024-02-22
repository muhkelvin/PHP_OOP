<?php
// Abstract class
abstract class Bentuk {
    // Metode abstrak untuk menghitung luas
    abstract public function hitungLuas();
}

// Kelas anak yang mewarisi kelas abstrak
class PersegiPanjang extends Bentuk {
    private $panjang;
    private $lebar;

    // Konstruktor
    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    // Implementasi metode hitungLuas
    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }
}

// Kelas anak lainnya yang mewarisi kelas abstrak
class Lingkaran extends Bentuk {
    private $radius;

    // Konstruktor
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implementasi metode hitungLuas
    public function hitungLuas() {
        return pi() * $this->radius * $this->radius;
    }
}

// Membuat objek PersegiPanjang dan Lingkaran
$persegiPanjang = new PersegiPanjang(5, 10);
$lingkaran = new Lingkaran(7);

// Memanggil metode hitungLuas untuk PersegiPanjang dan Lingkaran
echo "Luas Persegi Panjang: " . $persegiPanjang->hitungLuas() . "\n";
echo "Luas Lingkaran: " . $lingkaran->hitungLuas() . "\n";
