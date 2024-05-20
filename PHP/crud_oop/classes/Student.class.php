<?php
    require_once("Connection.class.php");

    class Student extends Connection{
        public function addNewStudent($fname, $lname, $city, $email, $phone, $gender){
            $sqlquery = "insert into students (fname, lname, city, email, phone, gender) values ('$fname', '$lname', '$city', '$email', '$phone', '$gender')";
            $this->connection->query($sqlquery);

            // return last created roll number
            return $this->connection->insert_id;
        }

        public function getAllStudents(){
            $sqlquery = "select * from students";
            return $this->connection->query($sqlquery);
        }

        public function deleteStudent($roll){
            $sqlquery = "delete from students where roll = $roll";
            $this->connection->query($sqlquery);
        }
    }

    $student = new Student();
?>