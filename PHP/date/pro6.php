<?php
    /*
    Get Your Time Zone
    If the time you got back from the code is not correct, it's probably because your server is in another country or set up for a different timezone.
    So, if you need the time to be correct according to a specific location, you can set the timezone you want to use.

    */
    
    echo "<hr> Default Timezone is ".date_default_timezone_get();
    echo "<hr> Time is ".date("h:i:s a");
    date_default_timezone_set("Asia/Kolkata");
    echo "<hr> Default Timezone is ".date_default_timezone_get();
    echo "<hr> Time is ".date("h:i:s a");
?>