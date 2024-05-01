<?php
    /*
        Exception Propogation
    */ 


    function function1(){
        function2();
    }

    function function2(){
        function3();
    }

    function function3(){
        function4();
    }

    function function4(){
        function5();
    }

    function function5(){
        throw new Exception("Example of Exception Propogation");
    }
    
    echo "<hr> Before Executable Code<hr>";
    try{
        function1();
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }finally{
        echo "<hr> Finally Block Executed";
    }
    echo "<hr> After Executable Code<hr>";
?>