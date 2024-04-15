<?php
    /*

    */ 

    $ip1 = 10;
    $ip2 = 20;

    function makeSum(){
        $GLOBALS["ans"] = $GLOBALS["ip1"] + $GLOBALS["ip2"];
    }

    makeSum();

    echo "<hr> Answer is $ans";
?>