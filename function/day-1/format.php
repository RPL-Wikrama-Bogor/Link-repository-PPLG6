<?php
    function formatNumber($number) {
        if ($number >= 1000000) {
        echo ($number/ 1000000) . 'M';
        }
        elseif ($number >= 1000) {
        echo ($number/ 1000) . 'K';
        }else {
            echo $number;
        }
        return $number;
    }

    formatNumber(180);
    echo "<br>";
    formatNumber(1700000);


