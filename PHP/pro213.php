<?php
    // nested loop (loop inside loop)

    // outer
    for($i=1; $i<=5; $i++){
        // inner
        for($j=1; $j<=5; $j++){
            echo "$j";
        }
        echo "<br>";
    }
?>