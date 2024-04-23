<?php
    /*
        Get a Date
        The required format parameter of the date() function specifies how to format the date (or time).
        Here are some characters that are commonly used for dates:

        d - Represents the day of the month (01 to 31)
        m - Represents a month (01 to 12)
        Y - Represents a year (in four digits)
        l (lowercase 'L') - Represents the day of the week

    */
    
    
    date_default_timezone_set("Asia/Kolkata");
    echo "<hr>".date("d/m/Y l");
    echo "<hr>".date("d/M/Y l");
    echo "<hr>".date("d/M/y l");

?>