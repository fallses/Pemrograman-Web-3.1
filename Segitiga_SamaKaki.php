<?php
    $tinggi = 50;

    for ($i = 1; $i <= $tinggi; $i++) {
        for ($j = $tinggi - $i; $j > 0; $j--) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }

        echo "<br>";
    }
?>
