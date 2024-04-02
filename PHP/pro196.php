<?php
    /*
        The while loop does not run a specific number of times, but checks after each iteration if the condition is still true.
        The condition does not have to be a counter, it could be the status of an operation or any condition that evaluates to either true or false.

        sum of all digits in entered number 
        ex. 12345 = 15
    */ 

    $ip1 = 12345;
    $ans = 0;

    while((int)$ip1 > 0){
        $ans += $ip1 % 10;
        $ip1 = (int) $ip1 / 10;
    }

    echo "Total Digits are $ans";
?>