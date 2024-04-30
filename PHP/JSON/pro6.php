<?php
    /*
        PHP - Looping Through the Values
        You can also loop through the values with a foreach() loop:
    */ 

    $JSONstudent = '{"roll":1, "fname":"Brijesh", "lname":"Miatra", "city":"Rajkot"}';

    // convert JSON String to PHP Assosiative Array
    $studentArray = json_decode($JSONstudent, true);

    foreach($studentArray as $key => $value){
        echo "<br> $key is $value";
    }
?>