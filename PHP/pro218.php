<?php
    /* 
        Associative arrays are different, associative arrays use named keys that you assign to them, and when looping through associative arrays, you might want to keep the key as well as the value.
    */
                
    $students = [12=>"Meet", 19=>"Ansh", 17=>"Alan", 22=>"Brijesh", 23=>"Krishil", 34=>"Gautam", 45=>"Pooja", 56=>"Sanjana"];

    foreach($students as $key => $value){
        echo "<hr> Key is $key value is $value";
    }

?>