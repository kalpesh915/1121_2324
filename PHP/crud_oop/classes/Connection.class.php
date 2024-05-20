<?php
    class Connection{
        // create required variables
        private $hostname = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "1121demo";

        // create global connection
        public $connection = null;

        // constructor for create connection
        public function __construct(){
            try{
                // create connection
                $this->connection = new mysqli($this->hostname, $this->username, $this->password, $this->database);

                // check for errors 
                if($this->connection->connect_error){
                    throw new Exception("Error while connecting database server ".$this->connection->connect_error);
                }
            }catch(Exception $err){
                echo "<hr>Error is $err";
            }
        }

        // function for filter received data
        function filterData($data){
            $data = trim($data);
            $data = htmlspecialchars($data);
            $data = stripslashes($data);
            return $data;
        }
    }
?>