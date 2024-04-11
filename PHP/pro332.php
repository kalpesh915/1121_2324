<?php
    /*
        array_pad() 	Inserts a specified number of items, with a specified value, to an array
        Return 5 elements and insert a value of "blue" to the new elements in the array:
    */ 
    
    $animals = ["Lion", "Cat", "Dog", "Cow", "Camel"];
    $animals = array_pad($animals, 20, "Tiger");
    print_r($animals);
?>
