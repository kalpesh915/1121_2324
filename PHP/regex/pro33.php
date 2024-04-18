<?php
    /*
        Grouping : You can use parentheses ( ) to apply quantifiers to entire patterns. They also can be used to select parts of the pattern to be used as a match.
    */ 

    $str1 = "Apples and bananas.";
    
    $pattern = "/ba(na){2}/"; 
    
    echo "<hr>".preg_replace($pattern, "*", $str1);
?>