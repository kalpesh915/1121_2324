<?php
    /*
        array_map() 	Sends each value of an array to a user-made function, which returns new values
    */ 
    
    function square($x){
        return ($x * $x);
    }

    $array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $result = array_map("square", $array1);
    print_r($result);
?>
