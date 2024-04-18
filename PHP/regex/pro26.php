<?php
    /*
        \uxxxx 	Find the Unicode character specified by the hexadecimal number xxxx
    */ 

    $str1 = "welcome to world of regular expression in php 1 12 23 123 $&$@#  44 %^$$# 112 3344 55 21 67 78 889 php";
    
    $pattern = "/\u{006f}/";  // 006f is unicode of 'o' character

    echo "<hr> $str1";
    echo "<hr>".preg_replace($pattern, "*", $str1);
?>