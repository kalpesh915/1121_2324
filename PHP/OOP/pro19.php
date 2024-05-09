<?php
    class Student{
        public $roll, $fname, $lname;

        public function __construct($roll, $fname, $lname){
            $this->roll = $roll;
            $this->fname = $fname;
            $this->lname = $lname;
        }

        public function intro(){
            echo "<hr> Welcome {$this->fname} {$this->lname} Your roll no. is {$this->roll}";
        }
    }

    class Meet extends Student{
        public function message(){
            echo "<hr> Good Morning";
        }
    }

    $obj1 = new Meet(1, "Meet", "Sinojiya");

    $obj1->message();
    $obj1->intro();


    $obj2 = new Meet(2, "Brijesh", "Miatra");

    $obj2->message();
    $obj2->intro();
?>