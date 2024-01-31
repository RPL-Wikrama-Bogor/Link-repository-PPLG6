<?php
function getHurufTerakhir($string) {
    $hurufTerakhir = substr($string, -1);
    
    return $hurufTerakhir;
}

$stringContoh = "Wikrama";
$hurufTerakhirContoh = getHurufTerakhir($stringContoh);

echo "Huruf terakhir dari \"$stringContoh\" adalah: $hurufTerakhirContoh";
