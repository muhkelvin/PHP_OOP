<?php
class Mobil {
    // Properti dengan visibility public
    public $merk;

    // Properti dengan visibility protected
    protected $warna;

    // Properti dengan visibility private
    private $tahunProduksi;

    // Constructor
    public function __construct($merk, $warna, $tahunProduksi) {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->tahunProduksi = $tahunProduksi;
    }

    // Metode dengan visibility public
    public function infoMobil() {
        echo "Mobil {$this->merk}, warna {$this->warna}, tahun produksi {$this->tahunProduksi}.\n";
    }

    // Metode dengan visibility protected
    protected function internalInfo() {
        echo "Metode internalInfo dipanggil.\n";
    }

    // Metode dengan visibility private
    private function privateInfo() {
        echo "Metode privateInfo dipanggil.\n";
    }
}

// Membuat objek dari kelas Mobil
$mobil = new Mobil("Toyota", "Hitam", 2020);

// Mengakses properti dan metode dengan visibility public
echo $mobil->merk . "\n"; // Output: Toyota
$mobil->infoMobil(); // Output: Mobil Toyota, warna Hitam, tahun produksi 2020.

// Mengakses properti dan metode dengan visibility protected dan private menyebabkan error
// echo $mobil->warna; // Ini akan menyebabkan error karena properti $warna adalah protected
// echo $mobil->tahunProduksi; // Ini akan menyebabkan error karena properti $tahunProduksi adalah private
// $mobil->internalInfo(); // Ini akan menyebabkan error karena metode internalInfo() adalah protected
// $mobil->privateInfo(); // Ini akan menyebabkan error karena metode privateInfo() adalah private
class Mobill{
    // Properti dengan visibility public
    public $merk;

    // Properti dengan visibility protected
    protected $warna;

    // Properti dengan visibility private
    private $tahunProduksi;

    // Constructor
    public function __construct($merk, $warna, $tahunProduksi) {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->tahunProduksi = $tahunProduksi;
    }

    // Metode dengan visibility public
    public function infoMobil() {
        echo "Mobil {$this->merk}, warna {$this->warna}, tahun produksi {$this->tahunProduksi}.\n";
    }

    // Metode dengan visibility protected
    protected function internalInfo() {
        echo "Metode internalInfo dipanggil.\n";
    }

    // Metode dengan visibility private
    private function privateInfo() {
        echo "Metode privateInfo dipanggil.\n";
    }
}

// Membuat objek dari kelas Mobil
$mobil = new Mobill("Toyota", "Hitam", 2020);

// Mengakses properti dan metode dengan visibility public
echo $mobil->merk . "\n"; // Output: Toyota
$mobil->infoMobil(); // Output: Mobil Toyota, warna Hitam, tahun produksi 2020.

// Mengakses properti dan metode dengan visibility protected dan private menyebabkan error
// echo $mobil->warna; // Ini akan menyebabkan error karena properti $warna adalah protected
// echo $mobil->tahunProduksi; // Ini akan menyebabkan error karena properti $tahunProduksi adalah private
// $mobil->internalInfo(); // Ini akan menyebabkan error karena metode internalInfo() adalah protected
// $mobil->privateInfo(); // Ini akan menyebabkan error karena metode privateInfo() adalah private
