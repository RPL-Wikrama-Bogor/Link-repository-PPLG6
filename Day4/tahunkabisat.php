<?php
$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];

echo "<ol>";
foreach ($data as $key => $nama) {
    echo "<li> {$nama["nama"]} "; 
    if ($nama['tahun'] % 4 == 0 ) {
        echo "lahir pada tahun kabisat ({$nama['tahun']})";
    } else {
        echo "lahir bukan pada tahun kabisat ({$nama['tahun']})";
    }
    echo "</li>";
}
echo "</ol>";
