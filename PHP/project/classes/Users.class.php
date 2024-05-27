<?php
    require_once("Connection.class.php");

    class Users extends Connection{
        public function adminLogin($adminemail, $password){
            $sqlquery = "select * from adminusers where adminemail = '$adminemail' and password = '$password'";
            
            $result = $this->connection->query($sqlquery);

            if($result->num_rows > 0){
                return true;
            }else{
                return false;
            }
        }

        public function getActivityLogs(){
            $sqlquery = "select * from logs order by (logid) desc";
            return $this->connection->query($sqlquery);
        }
    }

    $users = new Users();
?>