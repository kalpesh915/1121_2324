<?php
    /*
        list() 	Assigns variables as if they were an array
    */

    $my_array = array("Dog","Cat","Horse","Elephant");
    list($a, $b, $c, $d) = $my_array;
    echo "I have several animals, a $a, a $b a $d and a $c.";
?>