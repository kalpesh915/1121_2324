<?php
    /* 
        Revese the entered number
    */
               
    $ip1 = 983;
    $ans = 0;

    while((int) $ip1 > 0){
        $ans = $ans * 10;
        $ans = $ans + $ip1 % 10;
        $ip1 = (int) $ip1 / 10;
    }

    echo "Answer is $ans";
?>