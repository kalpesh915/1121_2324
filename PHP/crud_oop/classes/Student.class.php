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

        public function getStudent($roll){
            $sqlquery = "select * from students where roll = $roll";
            return $this->connection->query($sqlquery);
        }

        public function updateStudent($roll, $fname, $lname, $city, $email, $phone, $gender){
            $sqlquery = "update students set fname = '$fname', lname = '$lname', city = '$city', email = '$email', phone = '$phone', gender = '$gender' where roll = $roll";
            $this->connection->query($sqlquery);
        }
    }

    $student = new Student();
?>