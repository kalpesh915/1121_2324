<?php
    /* 
        The break Statement
        With the break statement we can stop the loop even if it has not reached the end:
    */
                
    class Student{
        public function __construct($roll, $fname, $lname){
            $this->roll = $roll;
            $this->fname = $fname;
            $this->lname = $lname;
        }
    }

    $obj = new Student(111, "Ansh", "Amrutiya");

    foreach($obj as $key => $value){
        if($key == "fname"){
            break;
        }
        echo "<hr>Property is $key and value is $value";
    }
?>