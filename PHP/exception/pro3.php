<?php
    /*
        The try...catch Statement
        To avoid the error from the example above, we can use the try...catch statement to catch exceptions and continue the process.
        Syntax
        try {
            code that can throw exceptions
        } catch(Exception $e) {
            code that runs when an exception is caught
        }
    */ 


    function division($ip1, $ip2){
        if($ip2 == 0){
            throw new Exception("Divison is not possible with (0) zero ");
        }else{
            return ($ip1 / $ip2);
        }
    }

    echo "<hr> Before Executable Code<hr>";
    try{
        echo "<hr> Division is ".division(115, 0)."<hr>";
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }
    echo "<hr> After Executable Code<hr>";
?>