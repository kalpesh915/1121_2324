<?php
    /*
        != 	Inequality 	$x != $y 	Returns true if $x is not equal to $y
    */ 

    $students1 = [1=>"meet", 2=>"brijesh", 3=>"krishil", 4=>"ansh", 5=>"alan"];
    $students2 = [1=>"meet", 2=>"brijesh", 3=>"krishil", 5=>"alan", 4=>"ansh"];


    var_dump($students1 != $students2);
?>