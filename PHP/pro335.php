<?php
    /*
        array_push() 	Inserts one or more elements to the end of an array
    */ 
    
    $animals = ["Lion", "Deer", "Tiger", "Cow"];

    array_push($animals, "Horse");
    array_push($animals, "Elephant");
    array_push($animals, "Monkey");
    array_push($animals, "Donkey");
    array_push($animals, "Elegator");

    print_r($animals);
?>
