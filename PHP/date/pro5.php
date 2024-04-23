<?php
    /*
        Get a Time : Here are some characters that are commonly used for times:
        H - 24-hour format of an hour (00 to 23)
        h - 12-hour format of an hour with leading zeros (01 to 12)
        i - Minutes with leading zeros (00 to 59)
        s - Seconds with leading zeros (00 to 59)
        a - Lowercase Ante meridiem and Post meridiem (am or pm)
    */
    
    date_default_timezone_set("Asia/Kolkata");

    echo "<hr>".date("h:i:s a");
    echo "<hr>".date("H:i:s a");

    // Note that the PHP date() function will return the current date/time of the server!
?>