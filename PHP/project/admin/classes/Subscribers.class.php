<?php
    require_once("Connection.class.php");

    class Subscribers extends Connection{

        public function getAllSubscribers(){
            $sqlquery = "select * from subscribers";
            return $this->connection->query($sqlquery);
        }

        public function deleteSubscriber($subscriberid){
            $sqlquery = "delete from Subscribers where subscriberid = $subscriberid";
            $this->connection->query($sqlquery);
        }

        public function changeSubscriberStatus($subscriberid, $status){
            $sqlquery = "update subscribers set status = $status where subscriberid = $subscriberid";
            $this->connection->query($sqlquery);
        }
    }

    $subscribers = new Subscribers();
?>