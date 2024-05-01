<?php
    /*
        The try...catch...finally Statement
        The try...catch...finally statement can be used to catch exceptions. Code in the finally block will always run regardless of whether an exception was caught. If finally is present, the catch block is optional.

        try {
            code that can throw exceptions
        } catch(Exception $e) {
            code that runs when an exception is caught
        } finally {
            code that always runs regardless of whether an exception was caught
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
        echo "<hr> Division is ".division(115, 20)."<hr>";
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }finally{
        echo "<hr> Finally Block Executed";
    }
    echo "<hr> After Executable Code<hr>";
?>