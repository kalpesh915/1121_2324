<?php
    /*
        PHP - json_encode() : The json_encode() function is used to encode a value to JSON format.
    */ 

    $student = ["meet", "Sanajana", "Pooja", "Krishil", "Brijesh", "Alan"];

    // convert PHP array to JSON String
    echo json_encode($student);
?>