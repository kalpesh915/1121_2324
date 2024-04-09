<?php
    /*
        Add Multiple Items to Associative Arrays
        To add multiple items to an existing array, you can use the += operator.
    */ 

    $students = ["fname"=>"pooja", "lname"=>"mori"];

    echo "<hr>Original Array is :<hr>";
    print_r($students);

    //array_push($students, "brijesh", "ansh", "meet", "krishil");
    $students += ["city"=>"Rajkot", "state"=>"Gujarat"];

    echo "<hr>Updated Array is :<hr>";
    print_r($students);    
?>