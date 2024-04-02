<?php
    /*
       The continue Statement : With the continue statement we can stop the current iteration, and continue with the next:
    */ 

    $ip1 = 1;
    
    while($ip1 <= 10){
        if($ip1 == 5){
            $ip1++;
            continue;
        }
        echo " $ip1";
        $ip1++;
    }
?>