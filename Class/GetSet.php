<?php
class Pengguna {
    // Properti
    private $nama;
    private $email;

    // Setter untuk nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Getter untuk nama
    public function getNama() {
        return $this->nama;
    }

    // Setter untuk email
    public function setEmail($email) {
        // Validasi email sebelum disimpan
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            echo "Email tidak valid.\n";
        }
    }

    // Getter untuk email
    public function getEmail() {
        return $this->email;
    }
}

// Membuat objek Pengguna
$pengguna = new Pengguna();

// Menggunakan setter untuk mengatur nilai nama dan email
$pengguna->setNama("John Doe");
$pengguna->setEmail("john@example.com");

// Menggunakan getter untuk mendapatkan nilai nama dan email
echo "Nama: " . $pengguna->getNama() . "\n";
echo "Email: " . $pengguna->getEmail() . "\n";

// Mencoba menggunakan setter untuk email dengan format yang tidak valid
$pengguna->setEmail("email.tidak.valid");