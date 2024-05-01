<?php
    /*
       The Exception Object : The Exception Object contains information about the error or unexpected behaviour that the function encountered.

       Syntax : new Exception(message, code, previous)

        Parameter Values
        Parameter 	Description
        message 	Optional. A string describing why the exception was thrown
        code 	    Optional. An integer that can be used to easily distinguish this 
                    exception from others of the same type
        previous 	Optional. If this exception was thrown in a catch block of another 
                    exception, it is recommended to pass that exception into this parameter

        
        When catching an exception, the following table shows some of the methods that can be used to get information about the exception:
        Method 	        Description
        getMessage() 	Returns a string describing why the exception was thrown
        getPrevious() 	If this exception was triggered by another one, this method 
                        returns the previous exception. If not, then it returns null
        getCode() 	    Returns the exception code
        getFile() 	    Returns the full path of the file in which the exception was thrown
        getLine() 	    Returns the line number of the line of code which threw the 
                        exception
    */ 


    function division($ip1, $ip2){
        if($ip2 == 0){
            throw new Exception("Divison is not possible with (0) zero ", 505);
        }else{
            return ($ip1 / $ip2);
        }
    }

    echo "<hr> Before Executable Code<hr>";
    try{
        echo "<hr> Division is ".division(115, 0)."<hr>";
    }catch(Exception $err){
        //echo "<hr> Error is $err";
        try{
            throw new Exception("This is Child Exception", 515, $err);
        }catch(Exception $err1){
            //echo "<hr> Sub Error is $err1";
            //echo "<hr> Sub Error is ".$err1->getMessage();
            echo "<hr> Sub Error is ".$err1->getPrevious();
            //echo "<hr> Sub Error is ".$err1->getPrevious()->getMessage();
        }
    }finally{
        echo "<hr> Finally Block Executed";
    }
    echo "<hr> After Executable Code<hr>";
?>