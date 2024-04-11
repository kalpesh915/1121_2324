<?php
    /*
        array_shift() 	Removes the first element from an array, and returns the value of the removed element
    */ 
    
    $animals = ["cow", "dog", "cat", "lion", "tiger"];

    array_shift($animals);
    array_shift($animals);
    array_shift($animals);
    
    print_r($animals);
?>
