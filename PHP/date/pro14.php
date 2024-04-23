<?php
    /*
        print date of next 10 sunday
    */
    
    date_default_timezone_set("Asia/Kolkata");

    $startDate = strtotime("next sunday");
    $endDate = strtotime("+10 week", $startDate);
    
    while($startDate <= $endDate){
        echo "<hr>".date("d/m/Y l", $startDate);
        $startDate = strtotime("+1 week", $startDate);
    }
?>