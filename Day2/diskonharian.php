 <!-- rumah makan beni mengadakan diskon sebesar 5% tiap pembelian hari selasa.
  Dan setiap pemmbelian diatas 100.000 mendapat diskon sebesar 7%. -->
  
  <!-- Hitunglah uang yang harus di bayar jika total
   pembelian 130.000 di hari ini -->

<?php
   $hari = "selasa"; 
$totalPembelian = 130000;

$diskonSelasa = $totalPembelian * 0.05;
$diskonDiatas = $totalPembelian * 0.07;

if ($hari == "selasa" || $totalPembelian > 100000) {
    if ($hari == "selasa" && $totalPembelian <= 100000) {
        $total_diskon = $totalPembelian - $diskonSelasa;
    } elseif ($hari == "selasa" && $totalPembelian > 100000) {
        $total_diskon = $totalPembelian - $diskonDiatas - $diskonSelasa;
    } elseif ($totalPembelian > 100000) {
        $total_diskon = $totalPembelian - $diskonDiatas;
    }
    echo "Total pembayaran yang harus dibayar adalah " . $total_diskon;
} else {
    echo "Tidak mendapatkan diskon";
}



 
 
 
