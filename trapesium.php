<?php
    $tinggi = 10;

    for ($i = 8; $i <= $tinggi; $i++) {
        for ($j = $tinggi - $i; $j > 0; $j--) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }
        for ($j = $tinggi - $i; $j > 0; $j--) {
            echo "&nbsp;&nbsp;";
        }
        echo "<br>";
    }
?>
