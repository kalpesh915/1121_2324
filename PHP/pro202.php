<?php
    /*
        Note: In a do...while loop the condition is tested AFTER executing the statements within the loop. This means that the do...while loop will execute its statements at least once, even if the condition is false. See example below.
    */ 

    $i = 100;

    do{
        echo " $i";
        $i++;
    }while($i <= 10); /// 101 <= 10 : False
?>