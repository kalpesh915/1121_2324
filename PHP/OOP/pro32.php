<?php
    /*
        PHP - What are Interfaces?
        Interfaces allow you to specify what methods a class should implement.
        Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism". Interfaces are declared with the interface keyword:    
    */

    interface RBI{
        public function getHomeLoanRates();
        public function getCarLoanRates();
        public function drinkingWater();
    }

    class SBI implements RBI{
        public function getHomeLoanRates(){
            echo "<hr> Home Loan Rates in SBI is 8.5%";
        }
        public function getCarLoanRates(){
            echo "<hr> Car Loan Rates in SBI is 12.5%";
        }
        public function drinkingWater(){
            echo "<hr> Yes Drinking water is Available";
        }
    }

    class Axis implements RBI{
        public function getHomeLoanRates(){
            echo "<hr> Home Loan Rates in AXIS is 9.15%";
        }
        public function getCarLoanRates(){
            echo "<hr> Car Loan Rates in AXIS is 13.5%";
        }
        public function drinkingWater(){
            echo "<hr> Yes Drinking water is Available";
        }
    }

    class HDFC implements RBI{
        public function getHomeLoanRates(){
            echo "<hr> Home Loan Rates in HDFC is 11.15%";
        }
        public function getCarLoanRates(){
            echo "<hr> Car Loan Rates in HDFC is 12.5%";
        }
        public function drinkingWater(){
            echo "<hr> Yes Drinking water is Available";
        }
    }

    $obj1 = new SBI();
    $obj2 = new Axis();

    $obj1->getHomeLoanRates();
    $obj1->getCarLoanRates();

    $obj2->getHomeLoanRates();
    $obj2->getCarLoanRates();
?>