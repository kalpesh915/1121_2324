<?php
    /*
        Loop Through an Indexed Array : To loop through and print all the values of an indexed array, you could use a foreach loop, like this:
    */ 

    $city = array("Rajkot", "Baroda", "Ahamdabad", "Bhuj", "Jamnagar");

    foreach($city as $tmp){
        echo "<hr> Welcome to $tmp";
    }
?>