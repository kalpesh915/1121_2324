<?php
    /*
        What is an Exception?
        An exception is an object that describes an error or unexpected behaviour of a PHP script. Exceptions are thrown by many PHP functions and classes. User defined functions and classes can also throw exceptions. Exceptions are a good way to stop a function when it comes across data that it cannot use.
    */ 

    $ip1 = 100;
    $ip2 = 0;

    echo "<hr> Before Executable Code<hr>";
    echo "<hr> Division is ".( $ip1 / $ip2 )."<hr>";
    echo "<hr> After Executable Code<hr>";
?>