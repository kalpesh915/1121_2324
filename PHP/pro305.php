<?php
    /*
        array_column() 	Returns the values from a single column in the input array
    */ 

    $students = array(
        array("roll"=>"1", "fname"=>"Pooja",  "lname"=>"Mori", "city"=>"Rajkot", "state"=>"Gujarat"), 
        array("roll"=>"2", "fname"=>"Sanjana","lname"=>"Sonagra", "city"=>"Rajkot", "state"=>"Gujarat"),
        array("roll"=>"3", "fname"=>"Krishil","lname"=>"Trivedi", "city"=>"Rajkot", "state"=>"Gujarat"),
        array("roll"=>"4", "fname"=>"Brijesh","lname"=>"Miatra", "city"=>"Rajkot", "state"=>"Gujarat")  
    );

    print_r(array_column($students, "fname"));
?>