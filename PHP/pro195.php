<?php
    /*
        The while loop does not run a specific number of times, but checks after each iteration if the condition is still true.
        The condition does not have to be a counter, it could be the status of an operation or any condition that evaluates to either true or false.

        Count how many digits in entered number
    */ 

    $ip1 = 723476888;
    $ans = 0;

    while((int)$ip1 > 0){
        $ans++;
        $ip1 = (int) $ip1 / 10;
    }

    echo "Total Digits are $ans";
?>