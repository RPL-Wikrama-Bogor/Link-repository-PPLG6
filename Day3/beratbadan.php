<?php

$beratBadan = 60;
$tinggiBadan = 148;
 
$imt = $beratBadan / ($tinggiBadan * $tinggiBadan / 1000);

echo $imt;

if ($imt < 18.5 ) {
    echo "berat badan kurang ";
} elseif ($imt >= 18.5 && $imt < 22.9) {
    echo "Normal";
} elseif ($imt >= 22.9 && $imt < 24.9) {
    echo "Berat Lebih";
} elseif ($imt >= 25 ) {
    echo "obesitas";
}