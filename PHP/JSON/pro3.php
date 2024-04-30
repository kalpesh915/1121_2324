<?php
    /*
        PHP - json_decode()
        The json_decode() function is used to decode a JSON object into a PHP object or an associative array.
    */ 

    $JSONstudent = '{"roll":1, "fname":"Brijesh", "lname":"Miatra", "city":"Rajkot"}';

    // convert JSON String to PHP Object
    $studentObj = json_decode($JSONstudent);

    // print values from PHP Object
    echo "<hr> First Name is : ".$studentObj->fname;
    echo "<hr> Last Name is : ".$studentObj->lname;
?>