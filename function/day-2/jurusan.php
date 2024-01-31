<?php 

// buatlah sebuah fungsi yang akan menghasilkan sebuah array dari banyak data yang diterima. Data yang dikirim berbentuk 
// string nama-nama jurusan. jika nama jurursan ada yang di panggil duplikat dan harus menggambil yang CAPSLOCK 


function createArray(...$jurusan) {
    $hasilArray = [];

    foreach ($jurusan as $namaJurusan) {
        $kapital = strtoupper($namaJurusan);

        if (!in_array($kapital, $hasilArray)) {
            $hasilArray[] = $kapital;
        }
    }

    return $hasilArray;
}


$hasil = createArray("PPLG", "TJKT", "KLN", "PMN", "DKV");

echo implode(', ', $hasil);