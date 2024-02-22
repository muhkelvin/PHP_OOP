<?php
// Kelas Induk atau Superclass
class Bentuk {
    // Metode untuk menghitung luas
    public function hitungLuas() {
        return 0;
    }
}

// Kelas Anak atau Subclass
class PersegiPanjang extends Bentuk {
    private $panjang;
    private $lebar;

    // Konstruktor
    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    // Override metode untuk menghitung luas
    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }
}

// Kelas Anak atau Subclass lainnya
class Lingkaran extends Bentuk {
    private $radius;

    // Konstruktor
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Override metode untuk menghitung luas
    public function hitungLuas() {
        return pi() * $this->radius * $this->radius;
    }
}

// Fungsi untuk menghitung luas objek Bentuk
function hitungLuasBentuk(Bentuk $bentuk) {
    return $bentuk->hitungLuas();
}

// Membuat objek PersegiPanjang dan Lingkaran
$persegiPanjang = new PersegiPanjang(5, 10);
$lingkaran = new Lingkaran(7);

// Memanggil fungsi hitungLuasBentuk dengan objek PersegiPanjang dan Lingkaran
echo "Luas Persegi Panjang: " . hitungLuasBentuk($persegiPanjang) . "\n";
echo "Luas Lingkaran: " . hitungLuasBentuk($lingkaran) . "\n";