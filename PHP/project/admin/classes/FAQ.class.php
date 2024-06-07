<?php
    require_once("Connection.class.php");

    class FAQ extends Connection{
        public function addNewFAQ($question, $answer){
            $sqlquery = "insert into faq (question, answer) values ('$question', '$answer')";
            $this->connection->query($sqlquery);
        }     

        public function getAllFAQ(){
            $sqlquery = "select * from faq";
            return $this->connection->query($sqlquery);
        }

        public function getOneFAQ($faqid){
            $sqlquery = "select * from faq where faqid = $faqid";
            return $this->connection->query($sqlquery);
        }

        public function updateFAQ($faqid, $question, $answer){
            $sqlquery = "update faq set question = '$question', answer = '$answer' where faqid = $faqid";
            $this->connection->query($sqlquery);
        }

        public function deleteFAQ($faqid){
            $sqlquery = "delete from faq where faqid = $faqid";
            $this->connection->query($sqlquery);
        }

        public function changeFAQStatus($faqid, $status){
            $sqlquery = "update faq set status = $status where faqid = $faqid";
            $this->connection->query($sqlquery);
        }
    }

    $faq = new FAQ();
?>