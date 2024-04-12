<?php
    /*
        array_unique() 	Removes duplicate values from an array
    */ 

    $array1 = array("a"=>"red","b"=>"green","c"=>"red", "d"=>"orange", "e"=>"red");

    $result = array_unique($array1);

    print_r($result);
?>