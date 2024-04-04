<?php
    /* 
        check entered number is palindrome or not

        12321
        >> <<
    */
               
    $ip1 = 11211;
    $ans = 0;

    $tmp = $ip1;

    while((int) $ip1 > 0){
        $ans = $ans * 10;
        $ans = $ans + $ip1 % 10;
        $ip1 = (int) $ip1 / 10;
    }

    if($tmp == $ans){
        echo "$tmp is Palindrome Number";
    }else{
        echo "$tmp is not Palindrome Number";
    }
?>