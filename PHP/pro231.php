<?php
    /* 
        prime number : A prime number is a whole number greater than 1 whose only factors are 1 and itself. A factor is a whole number that can be divided evenly into another number. The first few prime numbers are 2, 3, 5, 7, 11, 13, 17, 19, 23 and 29. Numbers that have more than two factors are called composite numbers.
    */

    $ip1 = 37;
    $flag = 0;

    for($i = 2; $i < $ip1; $i++){
        if($ip1 % $i == 0){
            $flag = 1;
            break;
        }
    }

    if($flag == 0){
        echo "$ip1 is Prime Number";
    }else{
        echo "$ip1 is not Prime Number";
    }
               
?>