<?php
    /* 
        factorial number
        5 = 5 * 4 * 3 * 2 * 1 = 120
    */
               
    $ans = 1;

    for($i=1; $i<=5; $i++){
        $ans *= $i;
    }

    echo "Answer is $ans";
?>