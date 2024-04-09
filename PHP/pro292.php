<?php
    /*
        + 	Union 	$x + $y 	Union of $x and $y
    */ 

    $students1 = [1=>"meet", 2=>"brijesh", 3=>"krishil", 4=>"ansh", 5=>"alan"];
    $students2 = [6=>"pooja", 7=>"sanjana"];   

    $answer = ($students1 + $students2);

    print_r($answer);    
?>