<?php

function rupiah($jumlahUang) {
    // Daftar pecahan uang
    $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100];

    // Array untuk menyimpan jumlah lembar uang masing-masing pecahan
    $lembarUang = [];

    // Iterasi melalui daftar pecahan
    foreach ($pecahan as $nilai) {
        // Menggunakan floor untuk mendapatkan jumlah lembar uang
        $jumlahLembar = floor($jumlahUang / $nilai);

        // Jika jumlah lembar lebih dari 0, tambahkan ke array hasil
        if ($jumlahLembar > 0) {
            $lembarUang[$nilai] = $jumlahLembar;
        }

        // Kurangkan jumlah uang sesuai dengan lembar uang yang sudah dihitung
        $jumlahUang %= $nilai;
    }

    return $lembarUang;
}

$uang = rupiah(140500);

// Menampilkan hasil dengan echo
echo "Lembar Uang:\n";
foreach ($uang as $nilai => $jumlah) {
    echo "$nilai: $jumlah lembar\n";
}

?>