<?php

$nilai1 = 90;

$predikat = ($nilai1 >= 90) ? "A" : (($nilai1 > 75 && $nilai1 <= 90) ? "B" : "C");
echo $predikat;