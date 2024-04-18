<?php
    /*
        \b 	Find a match at the beginning of a word like this: \bWORD, or at the end of a word like this: WORD\b
    */ 

    $str1 = "welcome to world of regular expression in php 1 12 23 123 $&$@#  44 %^$$# 112 3344 55 21 67 78 889 php";
    
    //$pattern = "/e/"; 
    //$pattern = "/\be/";  /// find e at begining of word
    $pattern = "/e\b/";  /// find e at end of word

    echo "<hr> $str1";
    echo "<hr>".preg_replace($pattern, "*", $str1);
?>