<?php
    /*
        array_merge_recursive() 	Merges one or more arrays into one array recursively
    */ 
    
    $array1 = ["red", "green", "blue", "pink"];
    $array2 = ["orange", "yellow", "pink"];

    $result = array_merge_recursive($array1, $array2);

    print_r($result);
?>
