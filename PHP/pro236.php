<?php
    /*
        PHP Default Argument Value
        The following example shows how to use a default parameter. 
        if we call greetings function without specify city it will autometically set city to
        "Rajkot"
    */ 

    function greetings($username, $roll, $city = "Rajkot"){
        echo "<hr> Welcome $username to $city, Good Morning your roll no. is $roll";
    }

    greetings("Mori Pooja", 111, "Morbi");  // arguments
    greetings("Sanjana Sonagra", 112, "Surat");
    greetings("Meet Sinojiya", 113, "Baroda");
    greetings(114, "Krishil Trivedi");
    
?>