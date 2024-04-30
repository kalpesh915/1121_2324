<?php
    /*
        PHP - json_decode()
        The json_decode() function is used to decode a JSON object into a PHP object or an associative array.
        The json_decode() function returns an object by default. The json_decode() function has a second parameter, and when set to true, JSON objects are decoded into associative arrays.
    */ 

    $JSONstudent = '{"roll":1, "fname":"Brijesh", "lname":"Miatra", "city":"Rajkot"}';

    // convert JSON String to PHP Assosiative Array
    $studentArray = json_decode($JSONstudent, true);

    print_r($studentArray);
?>