<?php
    /* 
        Alternative Syntax
        The foreach loop syntax can also be written with the endforeach statement like this
    */
                
    $students = ["Ansh", "Meet", "Alan", "Krishil", "Brijesh", "Gautam", "Pooja", "Sanjana"];

    
    foreach($students as $tmp):
        echo " $tmp";
    endforeach;

?>