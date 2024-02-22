<?php
// Fungsi untuk membagi dua bilangan
function bagi($pembilang, $penyebut) {
    if ($penyebut == 0) {
        throw new Exception("Tidak bisa membagi dengan nol!");
    }
    return $pembilang / $penyebut;
}

// Contoh penggunaan blok try-catch untuk menangani exception
try {
    // Memanggil fungsi bagi() dengan penyebut yang sama dengan nol
    $hasil = bagi(10, 0);
    echo "Hasil pembagian: " . $hasil . "\n";

    // Kode lain yang mungkin melemparkan exception
} catch (Exception $e) {
    // Menangkap exception dan menampilkan pesan kesalahan
    echo "Terjadi kesalahan: " . $e->getMessage() . "\n";
}
