<?php
    /* 
        The continue Statement
        With the continue statement we can stop the current iteration, and continue with the next:
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
            continue;
        }
        echo "<hr>Property is $key and value is $value";
    }
?>