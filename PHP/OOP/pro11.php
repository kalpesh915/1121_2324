<?php 
    /*
        revision of OOP 
    */

    class Student{
        // property / variables
        public $roll, $fname, $lname;

        // constructor
        public function __construct($roll, $fname, $lname){
            $this->roll = $roll;
            $this->fname = $fname;
            $this->lname = $lname;
        }

        public function printData(){
            echo "<hr>Welcome {$this->fname} {$this->lname} your roll no. is {$this->roll}";
        }

        // destrucotr
        public function __destruct(){
            echo "<hr> Object Deleted";
        }
    }

    // object of class
    $obj1 = new Student(1, "Brijesh", "Miatra");
    $obj2 = new Student(2, "Ansh", "Amrutiya");

    $obj1->printData();
    $obj2->printData();
?>