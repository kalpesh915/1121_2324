<?php
    abstract class RBI{
        abstract public function getHomeLoanRates();
        abstract public function getCarLoanRates();

        // non abstract method
        public function DrinkingWater(){
            echo "<hr> Every Bank Have Water Cooler";
        }

        // property in abstract class
        public $year = 2025;
    }

    class SBI extends RBI{
        public function getHomeLoanRates(){
            echo "<hr> Home Loan Rates in SBI is 8.5%";
        }
        public function getCarLoanRates(){
            echo "<hr> Car Loan Rates in SBI is 12.5%";
        }
    }

    class Axis extends RBI{
        public function getHomeLoanRates(){
            echo "<hr> Home Loan Rates in AXIS is 9.15%";
        }
        public function getCarLoanRates(){
            echo "<hr> Car Loan Rates in AXIS is 13.5%";
        }
    }

    class HDFC extends RBI{
        public function getHomeLoanRates(){
            echo "<hr> Home Loan Rates in HDFC is 11.15%";
        }
        public function getCarLoanRates(){
            echo "<hr> Car Loan Rates in HDFC is 12.5%";
        }
    }

    $obj1 = new SBI();
    $obj2 = new Axis();

    $obj1->getHomeLoanRates();
    $obj1->getCarLoanRates();

    $obj2->getHomeLoanRates();
    $obj2->getCarLoanRates();
?>