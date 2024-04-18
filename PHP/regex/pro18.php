<?php
    /*
        $ 	Finds a match at the end of the string as in: World$
    */ 

    $str1 = "welcome to world of regular expression in php 1 12 23 123 44 112 3344 55 21 67 78 889 php";
    
    //$pattern = "/php/"; 
    $pattern = "/php$/"; 

    echo "<hr> $str1";
    echo "<hr>".preg_replace($pattern, "*", $str1);
?>