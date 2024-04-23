<?php
    /*
        print date of next 10 sunday
    */
    
    date_default_timezone_set("Asia/Kolkata");

    $targetDate = strtotime("31 december");
    $days = ceil(($targetDate - time()) / 60 / 60 / 24);

    echo "$days remaining of this year";
?>