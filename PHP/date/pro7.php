<?php
    /*
        Create a Date With mktime()
        The optional timestamp parameter in the date() function specifies a timestamp. If omitted, the current date and time will be used (as in the examples above).
        The PHP mktime() function returns the Unix timestamp for a date. The Unix timestamp contains the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
    */
    
    date_default_timezone_set("Asia/Kolkata");
    $newDate = mktime(10, 10, 10, 6, 15, 2025);
    echo $newDate; // seconds from 1st jan 1970 12:00:00 / unix timestamp
    echo "<hr> Time is ".date("d/m/Y h:i:s a l");
    echo "<hr> Time is ".date("d/m/Y h:i:s a l", $newDate);
?>