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

    echo "<hr>Maximum is : ".findMaximum(111, 12);
    echo "<hr>Maximum is : ".findMaximum(111, 112);
    echo "<hr>Maximum is : ".findMaximum(111, 1211);
    echo "<hr>Maximum is : ".findMaximum(1110, 12);
?>