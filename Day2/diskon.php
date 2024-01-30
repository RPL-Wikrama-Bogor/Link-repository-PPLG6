<?php
$total = 100000;

if ($total >= 50000){
    $total_diskon = $total - 10000;
    echo "Rp $total_diskon";
} else {
    echo "Rp $total";
};

