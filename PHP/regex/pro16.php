<?php
    /*
        . 	Find any character
    */ 

    $str1 = "welcomE to world of regular expression in php 1 12 23 123 44 112 3344 55 21 67 78 889 ";
    //$pattern = "/t./"; 
    //$pattern = "/w./"; 
    $pattern = "/wo./"; 

    echo "<hr> $str1";
    echo "<hr>".preg_replace($pattern, "*", $str1);
?>