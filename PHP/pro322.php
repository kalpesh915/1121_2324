<?php
    /*
        array_key_exists() 	Checks if the specified key exists in the array
    */ 
    
    $array1 = ["key1" => "Rajkot", "key2" => "Surat", "key3" => "Ahamdabad"];
    
    if(array_key_exists("key11", $array1)){
        echo "Key is Exist";
    }else{
        echo "Key is Not Exist";
    }
?>
