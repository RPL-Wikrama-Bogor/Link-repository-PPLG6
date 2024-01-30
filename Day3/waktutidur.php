<?php
  $usia = 17;
    if ($usia >= 6 && $usia <= 12) {
        echo "Waktu tidur yang baik untuk usia $usia tahun adalah 10 jam.";
    } elseif ($usia > 12 && $usia <= 18) {
        echo "Waktu tidur yang baik untuk usia $usia tahun adalah 8-9 jam.";
    } else if ($usia >18 && $usia <=40) {
        echo "Waktu tidur yang baik untuk usia $usia tahun adalah 8 jam.";
    }
 