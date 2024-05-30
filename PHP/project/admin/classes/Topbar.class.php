<?php
    require_once("Connection.class.php");

    class Topbar extends Connection{
        // get count of new notifications
        public function getNotificationCount(){
            $sqlquery = "select count(logid) from logs where status = 0";
            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                return $row["count(logid)"];
            }
        }

        public function loadSomeNotifications($count){
            $sqlquery = "select * from logs where status = 0 order by (logid) desc limit $count";
            return $this->connection->query($sqlquery);
        }

        public function loadAllNotifications(){
            $sqlquery = "select * from logs where status = 0 order by (logid) desc";
            return $this->connection->query($sqlquery);
        }

        public function markAllNotificationtoRead(){
            $sqlquery = "update logs set status = 1 where status = 0";
            $this->connection->query($sqlquery);
        }
        
        // messages
        public function getUnreadMsgCount(){
            $sqlquery = "select count(messageid) from messages where status = 0";
            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                return $row["count(messageid)"];
            }
        }

        public function loadSomeMessages($count){
            $sqlquery = "select * from messages where status = 0 order by (messageid) desc limit $count";
            return $this->connection->query($sqlquery);
        }

        public function getAllUnreadMessages(){
            $sqlquery = "select * from messages where status = 0 order by (messageid) desc";
            return $this->connection->query($sqlquery);
        }

        public function getAllMessages(){
            $sqlquery = "select * from messages order by (messageid) desc";
            return $this->connection->query($sqlquery);
        }

        public function getOneMessage($messageid){
            $sqlquery = "update messages set status = 1 where messageid = $messageid";
            $this->connection->query($sqlquery);
            $sqlquery = "select * from messages where messageid = $messageid";
            return $this->connection->query($sqlquery);
        }
    }

    $topbar = new Topbar();
?>