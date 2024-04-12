<?php
    /*
        PHP array_values() Function
        PHP array_walk() Function
    */ 

    function printer($value, $key){
        echo "<hr> Key is $key and value is $value";
    }

    $a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA","zip"=>"998877");
    array_walk($a, "printer");
?>