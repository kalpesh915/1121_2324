<?php
    /*
        Why Use Filters?
        Many web applications receive external input. External input/data can be:
        User input from a form, Cookies, Web services data, Server variables, Database query results
        You should always validate external data!
        Invalid submitted data can lead to security problems and break your webpage! By using PHP filters you can be sure your application gets the correct input!

        PHP filter_var() Function
        The filter_var() function both validate and sanitize data.
        The filter_var() function filters a single variable with a specified filter. It takes two pieces of data: The variable you want to check, The type of check to use
    */

    $ip = "<h1>Welcome to <b>world</b> of <u>PHP</u></h1>";

    $ip = filter_var($ip, FILTER_SANITIZE_STRING);
    echo $ip;
?>