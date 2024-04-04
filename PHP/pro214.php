<?php
    /* nested loop (loop inside loop)
        1
        12
        123
        1234
        12345
    */
    // outer
    for($i=1; $i<=5; $i++){
        // inner
        for($j=1; $j<=$i; $j++){
            echo "$j";
        }
        echo "<br>";
    }
?>