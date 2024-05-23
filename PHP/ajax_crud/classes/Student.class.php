<?php
    require_once("Connection.class.php");

    class Student extends Connection{
        // get all Students
        public function getAllStudents(){
            $sqlquery = "select * from students";
            return $this->connection->query($sqlquery);
        }

        public function addNewStudent($fname, $lname, $city, $email, $phone, $gender){
            $sqlquery = "insert into students (fname, lname, city, email, phone, gender) values ('$fname', '$lname', '$city', '$email', '$phone', '$gender')";
            $this->connection->query($sqlquery);

            return $this->connection->insert_id; // last insetred roll number
        }

        public function getStudent($roll){
            $sqlquery = "select * from students where roll = $roll";
            return $this->connection->query($sqlquery);
        }

        public function updateStudent($roll, $fname, $lname, $city, $email, $phone, $gender){
            $sqlquery = "update students set fname = '$fname', lname = '$lname', city = '$city', email = '$email', phone = '$phone', gender = '$gender' where roll = $roll";
            $this->connection->query($sqlquery);
        }

        public function deleteStudent($roll){
            $sqlquery = "delete from students where roll = $roll";
            $this->connection->query($sqlquery);
            return $this->connection->affected_rows;
        }   
    }

    $student = new Student();
?>