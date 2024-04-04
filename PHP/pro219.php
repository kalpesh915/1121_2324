<?php
    /* 
        The foreach Loop on Objects
        The foreach loop can also be used to loop through properties of an object:
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
        echo "<hr>Property is $key and value is $value";
    }
?>