<?php
    //session_id("MEETRajkot274684demosessionid");
    session_start();
    require_once("menu.php");
    
    echo "<hr> Session ID is ".session_id();
    session_regenerate_id();
    echo "<hr> Session ID is ".session_id();

    /*
        How does it work? How does it know it's me?
    
        Most sessions set a user-key on the user's computer that looks something like this: 765487cf34ert8dede5a562e4f3a7e12. Then, when a session is opened on another page, it scans the computer for a user-key. If there is a match, it accesses that session, if not, it starts a new session.
    */
?>