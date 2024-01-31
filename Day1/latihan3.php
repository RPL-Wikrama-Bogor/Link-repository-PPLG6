<?php

$angka1 = 10;
$angka2 = 3;
$hasil = $angka1 / $angka2;

echo "Bilangan $angka1 Dibagi $angka2";

if ($angka1 == round($angka2)) {

    echo "tanpa pembulatan";
} else {

    $rounded_hasil = ceil($hasil);
    echo "<br>Hasil pembagian: " . $hasil ;
    echo "<br>Hasil pembulatan: " . $rounded_hasil;
}
?>

