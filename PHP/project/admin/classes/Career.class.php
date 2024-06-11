<?php
    require_once("Connection.class.php");

    class Career extends Connection{
        public function getNewJobApplications(){
            $sqlquery = "select careerid, candidatefname, candidatelname, gender, dateofbirth, jobposition, experience, education from career where status = 0";
            return $this->connection->query($sqlquery);
        }

        public function getAllJobApplications(){
            $sqlquery = "select careerid, candidatefname, candidatelname, gender, dateofbirth, jobposition, experience, education from career";
            return $this->connection->query($sqlquery);
        }

        public function getOneApplication($careerid){
            $sqlquery = "select * from career where careerid = $careerid";
            return $this->connection->query($sqlquery);
        }

        public function markReadApplication($careerid){
            $sqlquery = "update career set status = 1 where careerid = $careerid";
            $this->connection->query($sqlquery);
        }
    }

    $career = new Career();
?>