<?php
    /*
        [abc] 	Find one or many of the characters inside the brackets 	
        [^abc] 	Find any character NOT between the brackets
        [a-z] 	Find any character alphabetically between two letters 	
        [A-z] 	Find any character alphabetically between a specified upper-case letter and a 
                specified lower-case letter
    */ 

    $str1 = "welcomE to world of regular expression in php 1 12 23 123 44 112 3344 55 21";
    $pattern = "/[a-z]/";

    echo "<hr> $str1";
    echo "<hr>".preg_replace($pattern, "*", $str1);
?>