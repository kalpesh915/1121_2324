<?php
    require_once("classes/Student.class.php");

    // code for add new student
    if(isset($_POST["add_process"])){
        // read all data from form 
        $fname = filterData($_POST["fname"]);
        $lname = filterData($_POST["lname"]);
        $city  = filterData($_POST["city"]);
        $email = filterData($_POST["email"]);
        $phone = filterData($_POST["phone"]);
        $gender = filterData($_POST["gender"]);

        // check for empty form feild
        if($fname=="" || $lname=="" || $city=="" || $email=="" || $phone=="" || $gender==""){
            $response = [
                "status" => 422,
                "message" => "Please Fill All The Fields"
            ];
            // send error response to index.php
            echo json_encode($response);
            return;
        } 

        // add new student function called
        $roll = $student->addNewStudent($fname, $lname, $city, $email, $phone, $gender);

        if($roll > 0){
            $response = [
                "status" => 200,
                "message" => "New Student Created with $roll Roll Number."
            ];
        }else{
            $response = [
                "status" => 500,
                "message" => "Server Error While Creating New Record"
            ];
        }
        // send success response to index.php
        echo json_encode($response);
        return;

    }else if(isset($_GET["roll"])){
        // code for get single student for view or edit
        $roll = filterData($_GET["roll"]);
        // grab the data from database of received roll number 
        $result = $student->getStudent($roll);

        if($result->num_rows > 0){
            $data = $result->fetch_assoc();
            $response = [
                "status" => 200,
                "data" => $data,
                "message" => "Data Found"
            ];
        }else{
            $response = [
                "status" => 404,
                "message" => "No Data Found on $roll $roll Number"
            ];
        }

        echo json_encode($response);
        return;

    }else if(isset($_POST["update_process"])){
        // code for update student (get form data)
        $roll = filterData($_POST["roll"]);
        $fname = filterData($_POST["fname"]);
        $lname = filterData($_POST["lname"]);
        $city  = filterData($_POST["city"]);
        $email = filterData($_POST["email"]);
        $phone = filterData($_POST["phone"]);
        $gender = filterData($_POST["gender"]);
     
        // check for empty fields
        if($roll == "" || $fname=="" || $lname=="" || $city=="" || $email=="" || $phone=="" || $gender==""){
            $response = [
                // error 
                "status" => 422,
                "message" => "Please Fill All The Fields"
            ];

            echo json_encode($response);
            return;
        } 

        // code for update data in database
        $student->updateStudent($roll, $fname, $lname, $city, $email, $phone, $gender);
        $response = [
            "status" => 200,
            "message" => "Data Updated Successfully"
        ];

        echo json_encode($response);
        return;
    }else if(isset($_POST["delete_process"])){
        // code for delete student
        $roll = filterData($_POST["roll"]);
        $count = $student->deleteStudent($roll);

        if($count >= 1){
            $response = [
                "status" => 200,
                "message" => "Data Deleted with $roll Roll Number"
            ];
        }else{
            $response = [
                "status" => 404,
                "message" => "No Data Found with $roll Roll Number"
            ];
        }

        echo json_encode($response);
        return;
    }

    // function for filter data
    function filterData($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }
?>