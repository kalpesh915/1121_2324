<?php
    /*
        The continue Statement : With the continue statement we can stop the current iteration, and continue with the next:
    */

    for($ip1 = 1; $ip1 <= 10; $ip1++){
        if($ip1 == 5){
            continue;
        }
        echo " $ip1";
    }
?>