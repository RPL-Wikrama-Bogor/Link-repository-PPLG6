<?php
function perbandinganNama($nama1, $nama2) {
    $karakter1 = strlen(str_replace(' ', '', $nama1));
    $karakter2 = strlen(str_replace(' ', '', $nama2));

    if ($karakter1 > $karakter2) {
        echo "$nama1 memiliki jumlah karakter lebih banyak daripada $nama2 sebanyak " . ($karakter1 - $karakter2) . " karakter.";
    } elseif ($karakter1 < $karakter2) {
        echo "$nama2 memiliki jumlah karakter lebih banyak daripada $nama1 sebanyak " . ($karakter2 - $karakter1) . " karakter.";
    } else {
        echo "Jumlah karakter dari $nama1 dan $nama2 sama.";
    }
}

perbandinganNama("Azka Fathurrahman", "Muhammad Azka");

