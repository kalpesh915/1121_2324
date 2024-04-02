<?php
    /*
        Loops are used to execute the same block of code again and again, as long as a certain condition is true.
        In PHP, we have the following loop types:
        
        while       -   loops through a block of code as long as the specified condition is true
        do...while  -   loops through a block of code once, and then repeats the loop as long as 
                        the specified condition is true
        for         -   loops through a block of code a specified number of times
        foreach     -   loops through a block of code for each element in an array

    */ 

    for($i=1; $i<=10; $i++){
        echo "<hr> Welcome to world of PHP Loops";
    }
?>