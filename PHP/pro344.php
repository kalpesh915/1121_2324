<?php
    /*
        array_splice($array, start, number of element delete, new elements) 	Removes and replaces specified elements of an array
    */ 
                
    $animals = ["cow", "dog", "cat", "lion", "tiger"];
    
    echo "<hr> Original Array is :";
    print_r($animals);
    //array_splice($animals, 0, 2);
    //array_splice($animals, 2, 2);
    array_splice($animals, 0, 2, ["Elephant", "Elegator"]);

    echo "<hr> Updated Array is :";
    print_r($animals);
?>
