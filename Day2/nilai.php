<?php
$nilai_matematika = 87;
$nilai_bahasainggris = 85;
$nilai_bahasaindonesia = 87;

$rata_rata = ($nilai_matematika + $nilai_bahasainggris + $nilai_bahasaindonesia) / 3;

if ($rata_rata >= 85 ){
    echo "diterima";
} else {
    echo "tidak di terima";
}