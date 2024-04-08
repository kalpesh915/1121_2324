<?php
    /*
        Index Number
        The key of an indexed array is a number, by default the first item is 0 and the second is 1 etc., but there are exceptions. New items get the next index number, meaning one higher than the highest existing index. So if you have an array like this:
    */ 

    $city = ["Rajkot", "Baroda", "Ahamdabad", "Bhuj", "Jamnagar"];
    print_r($city);
    
    echo "<hr>After Add New Value : <hr>";
    $city[11] = "Junagadh";
    print_r($city);
?>