<?php
    /*
        The break Statement
        With the break statement we can stop the loop even if the condition is still true:
    */

    for($ip1 = 1; $ip1 <= 10; $ip1++){
        if($ip1 == 5){
            break;
        }
        echo " $ip1";
    }
?>