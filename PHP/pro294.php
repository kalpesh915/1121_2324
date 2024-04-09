<?php
    /*
        === 	Identity 	$x === $y 	Returns true if $x and $y have the same key/value pairs in the same order and of the same types
    */ 

    $students1 = [1=>"meet", 2=>"brijesh", 3=>"krishil", 4=>"ansh", 5=>"alan"];
    $students2 = [1=>"meet", 2=>"brijesh", 3=>"krishil", 5=>"alan", 4=>"ansh"];
    //$students2 = [1=>"meet", 2=>"brijesh", 3=>"krishil", 4=>"ansh", 5=>"alan thomas"];

    var_dump($students1 === $students2);
?>