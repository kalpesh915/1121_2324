<?php
    /*
        PHP Date and Time
        The PHP date() function is used to format a date and/or a time.
        The PHP date() function formats a timestamp to a more readable date and time.

        Syntax : date(format,timestamp)
        Parameter 	Description
        format 	    Required. Specifies the format of the timestamp
        timestamp 	Optional. Specifies a timestamp. Default is the current date and time
    */
    
    
    date_default_timezone_set("Asia/Kolkata");
    echo date("d/m/Y h:i:s");

    // A timestamp is a sequence of characters, denoting the date and/or time at which a certain event occurred.
?>