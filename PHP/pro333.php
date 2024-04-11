<?php
    /*
        array_pop() 	Deletes the last element of an array
    */ 
    
    $animals = ["Lion", "Cat", "Dog", "Cow", "Camel"];

    array_pop($animals); // Camel
    array_pop($animals); // Cow
    array_pop($animals); // Dog

    print_r($animals);
?>
