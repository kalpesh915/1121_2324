<?php
    /*
        The PHP for Loop
        The for loop is used when you know how many times the script should run.
        Syntax
        for (expression1, expression2, expression3) {
            // code block
        }

        for(initliazation; condition; increment / decrement){
            executable code
        }
    */ 

    /*
        $ip1 = 1; // iniltlization

        while($ip1 <= 10){ // condtion
            echo " $ip1";
            $ip1++; // increment / decrement
        }
    */

    for($ip1 = 1; $ip1 <= 10; $ip1++){
        echo " $ip1";
    }

    /*
        This is how it works:   
        expression1 (iniltlization) is evaluated once
        expression2 (condition) is evaluated before each iterarion
        expression3 (increment / decrement) is evaluated after each iterarion
    */ 
?>