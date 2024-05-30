<?php
    class Connection{
        private $hostname = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "1121project";

        public $connection = null;

        // create connection
        public function __construct(){
            $this->connection = new mysqli($this->hostname, $this->username, $this->password, $this->database);

            if($this->connection->connect_error){
                die("Error While Connecting with Database Server ".$this->connection->connect_error);
            }
        }

        // filter input form data 
        public function filterData($data){
            $data = trim($data);
            $data = htmlspecialchars($data);
            $data = stripcslashes($data);
            return $data;
        }

        // log writer (log entry)
        public function logWriter($email, $logevent){
            $sqlquery = "insert into logs (adminemail, logmessage) values ('$email', '$logevent')";
            $this->connection->query($sqlquery);
        }
    }
?>