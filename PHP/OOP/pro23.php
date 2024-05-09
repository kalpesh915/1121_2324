<?php
    /*
        try to access protected data of parent class
    */ 

    class Math1{
        /*
            Sum and Sub Both methods are protected for Math1 class, you are not allowd to access these methods from Object, call from Same class or Child class methods.
        */
        protected function Sum($ip1, $ip2){
            echo "<hr> Sum of $ip1 and $ip2 is ".($ip1 + $ip2);
        }
        protected function Sub($ip1, $ip2){
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

        public function CallProtected($ip1, $ip2){
            $this->Sum($ip1, $ip2);
            $this->Sub($ip1, $ip2);
        }
    }

    $obj1 = new Math2();
    $obj1->CallProtected(111, 22);
    $obj1->Mul(111, 2);
    $obj1->Div(111, 2);

    /*
            From        Same Class      Child Class     Object

    Access  private     Yes             No              No
            protected   Yes             Yes             No
            Public      Yes             Yes             Yes
            No Access   Yes             Yes             Yes

            * Default Access is Public
    */
?>