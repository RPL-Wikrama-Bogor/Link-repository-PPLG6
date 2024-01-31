<?php

$student = [

    [
        "nama" => "ghalib",
        "nilai" => [70,90,99,86]
    ],
    [
        "nama" => "Ikhfan",
        "nilai" => [90,98,99,86]
    ],
    [
        "nama" => "rhestu",
        "nilai" => [90,76,99,86]
    ],
    [
        "nama" => "Ikhfan",
        "nilai" => [85,80,95,90]
    ],

];

echo "<ol>";

foreach ($student as $key => $value) {
    echo "<li>" . $value['nama' ] . (array_sum($value['nilai']) / count($value['nilai'])) . "</li>";
}
echo "</ol>";