<?php
    /*
       Step 10 : If you want the while loop count to 100, but only by each 10, you can increase the counter by 10 instead 1 in each iteration:
    */ 

    $ip1 = 0;
    
    while($ip1 <= 100):
        
        echo " $ip1";
        $ip1 += 10;

    endwhile;
?>