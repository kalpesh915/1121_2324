<?php
    /*
        Create a Date From a String With strtotime()
        The PHP strtotime() function is used to convert a human readable date string into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 GMT).
    */
    
    date_default_timezone_set("Asia/Kolkata");
    $newDate = strtotime("15 nov 2030 15:15:15");
    echo "<hr> Time is ".date("d/m/Y h:i:s a l", $newDate);
?>