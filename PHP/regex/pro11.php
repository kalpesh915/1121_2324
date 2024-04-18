<?php
    /*
        [123] 	Find one or many of the digits inside the brackets
    */ 

    $str1 = "welcomE to world of regular expression in php 1 12 23 123 44 112 3344 55 21";
    $pattern = "/[123]/"; 

    echo "<hr> $str1";
    echo "<hr>".preg_replace($pattern, "*", $str1);
?>