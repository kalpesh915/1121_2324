<?php
    /* 
        print odd numbers between 1 to 100 with continue keyword
    */
               
    for($i=1; $i<=100; $i++){
        if($i %2 == 0){
            continue;
        }
        echo " $i";
    }
?>