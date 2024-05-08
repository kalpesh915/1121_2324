<?php
    /*
        Access : PHP - Access Modifiers
        Properties and methods can have access modifiers which control where they can be accessed. There are three access modifiers:

            
        public - the property or method can be accessed from everywhere. This is default
        protected - the property or method can be accessed within the class and by classes derived from that class
        private - the property or method can ONLY be accessed within the class
    */

    class Student{
        // property / variables
        public $roll, $fname, $lname;

        // constructor
        public function __construct($roll, $fname, $lname){
            $this->roll = $roll;
            $this->fname = $fname;
            $this->lname = $lname;

            // call private printData function from constructor
            $this->printData();
        }

        // printData is now private for Student class
        private function printData(){
            echo "<hr>Welcome {$this->fname} {$this->lname} your roll no. is {$this->roll}";
        }
    }

    // object of class
    $obj1 = new Student(1, "Brijesh", "Miatra");
    $obj2 = new Student(2, "Ansh", "Amrutiya");

?>
