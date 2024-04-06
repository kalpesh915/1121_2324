<?php
    /*
        PHP Functions - Returning values
        To let a function return a value, use the return statement:
    */ 

    function findMaximum($ip1, $ip2){
        if($ip1 > $ip2){
            $ans = $ip1;
        }else{
            $ans = $ip2;
        }
        return $ans;
    }

    $ans = findMaximum(111, 22);
    echo "<hr>Maximum is : $ans";
?>