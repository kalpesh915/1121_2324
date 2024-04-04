<?php
    /* 
        PHP Continue
        The continue statement can be used to jump out of the current iteration of a loop, and continue with the next.

        continue keyword used to jump over next loop iteration
    */
               
    for($i=1; $i<=10; $i++){
        if($i == 5){
            continue;
        }
        echo " $i";
    }
?>