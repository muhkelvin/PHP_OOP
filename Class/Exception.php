<?php
// Fungsi untuk membagi dua bilangan
function bagi($pembilang, $penyebut) {
    if ($penyebut == 0) {
        throw new Exception("Tidak bisa membagi dengan nol!");
    }
    return $pembilang / $penyebut;
}

// Contoh penggunaan fungsi bagi() dengan exception handling
try {
    $hasil = bagi(10, 0);
    echo "Hasil pembagian: " . $hasil . "\n";
} catch (Exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage() . "\n";
}
