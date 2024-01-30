<?php
$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];

echo "Kelompok Kompeten: ";
foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        echo $nilai . " ";
    }
}
echo"<br>";
echo "Kelompok Belum Kompeten: ";
foreach ($bilangan as $nilai) {
    if ($nilai < 75) {
        echo $nilai . " ";
    }
}
