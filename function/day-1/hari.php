<?php
 function formatIDN($date) {
    $daysInIDN = ['Mon' => 'Senin', 'Tue' => 'Selasa', 'Wed' => 'Rabu', 'Thu' => 'Kamis', 'Fri' => 'Jumat', 'Sat' => 'Sabtu', 'Sun' => 'Minggu'];
    echo strtr(date('D, d M y', strtotime($date)), $daysInIDN);
 }

 $date = date('D, d M y');
 echo $date . " vs ";
 formatIDN($date);

//  strtr
//  digunakan untuk melakukan pergantian karakter dalam sebuah string

