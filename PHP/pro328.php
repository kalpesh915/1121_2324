<?php
    /*
        array_merge_recursive() 	Merges one or more arrays into one array recursively
    */ 
    
    $array1 = ["color1"=>"red", "color2"=>"green", "color3"=>"blue", "color4"=>"pink"];
    $array2 = ["color5"=>"orange", "color6"=>"yellow", "color3"=>"pink"];

    $result = array_merge_recursive($array1, $array2);

    print_r($result);
?>
