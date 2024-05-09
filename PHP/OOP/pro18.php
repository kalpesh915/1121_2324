<?php
    // Hierarchical

    class Design{
        public function pattern1(){
            echo "<br>*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*<br>";
        }
    }

    class Math1 extends Design{
        public function Sum($ip1, $ip2){
            $this->pattern1();
            echo "<hr> Sum of $ip1 and $ip2 is ".($ip1 + $ip2);
        }
        public function Sub($ip1, $ip2){
            $this->pattern1();
            echo "<hr> Sub of $ip1 and $ip2 is ".($ip1 - $ip2);
        }
    }

    class Math2 extends Design{
        public function Div($ip1, $ip2){
            $this->pattern1();
            echo "<hr> Div of $ip1 and $ip2 is ".($ip1 / $ip2);
        }
        public function Mul($ip1, $ip2){
            $this->pattern1();
            echo "<hr> Mul of $ip1 and $ip2 is ".($ip1 * $ip2);
        }
    }

    $obj1 = new Math1();
    $obj2 = new Math2();

    $obj1->Sum(111, 22);
    $obj1->Sub(111, 22);

    $obj2->Mul(111, 22);
    $obj2->Div(111, 22);
   
?>