<?php
    /*
        The break Statement : With the break statement we can stop the loop even if the condition is still true:
    */ 

    $ip1 = 1;
    
    while($ip1 <= 10){
        if($ip1 == 5){
            break;
        }
        echo " $ip1";
        $ip1++;
    }
?>