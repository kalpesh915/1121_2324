<?php
    /*
        Loop Through an Associative Array To loop through and print all the values of an associative array, you can use a foreach loop, like this:
    */ 

    $students = ["1"=>"Brijesh", "2"=>"Ansh", "3"=>"Krishil","4"=>"Sanajan", "5"=>"Pooja"];

    foreach($students as $key => $value){
        echo "Welcome $value Your roll no. is $key <hr>";
    }
?>