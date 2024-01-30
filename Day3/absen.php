<?php

$absen = "sakit";

$kehadiran = ($absen == "sakit") || ($absen == "izin") ? 100 -3 : 
    (($absen == "alfa") ? 100 - 5 : 100);
    echo "total kehadiran $kehadiran";