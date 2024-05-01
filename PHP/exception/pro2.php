<?php
    /*
        Throwing an Exception
        The throw statement allows a user defined function or method to throw an exception. When an exception is thrown, the code following it will not be executed.
        If an exception is not caught, a fatal error will occur with an "Uncaught Exception" message. Lets try to throw an exception without catching it:
    */ 


    function division($ip1, $ip2){
        if($ip2 == 0){
            throw new Exception("Divison is not possible with (0) zero ");
        }else{
            return ($ip1 / $ip2);
        }
    }

    echo "<hr> Before Executable Code<hr>";
    echo "<hr> Division is ".division(115, 0)."<hr>";
    // following code not executed due to exception
    echo "<hr> After Executable Code<hr>";
?>