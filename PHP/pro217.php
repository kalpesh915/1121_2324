<?php
    /* 
        Keys and Values
        The array above is an indexed array, where the first item has the key 0, the second has the key 1, and so on.
    */
                /// 0       1      2
    $students = ["Meet", "Ansh", "Alan", "Brijesh", "Krishil", "Gautam", "Pooja", "Sanjana"];

    foreach($students as $key => $value){
        echo "<hr> Key is $key value is $value";
    }

?>