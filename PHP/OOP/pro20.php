<?php
    /*
        try to access private data of parent class
    */ 

    class Math1{
        /*
            Sum and Sub Both methods are private for Math1 class, you are not allowd to access these methods from outside of Math1 Class.
        */
        private function Sum($ip1, $ip2){
            echo "<hr> Sum of $ip1 and $ip2 is ".($ip1 + $ip2);
        }
        private function Sub($ip1, $ip2){
            echo "<hr> Sub of $ip1 and $ip2 is ".($ip1 - $ip2);
        }
    }

    class Math2 extends Math1{
        public function Div($ip1, $ip2){
            echo "<hr> Div of $ip1 and $ip2 is ".($ip1 / $ip2);
        }
        public function Mul($ip1, $ip2){
            echo "<hr> Mul of $ip1 and $ip2 is ".($ip1 * $ip2);
        }
    }

    $obj1 = new Math2();
    $obj1->Sum(111, 2);
    $obj1->Sub(111, 2);
    $obj1->Mul(111, 2);
    $obj1->Div(111, 2);
?>