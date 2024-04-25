<?php
    /*
        code for test valid user session is created or not 
    */
    session_start();
    if(isset($_SESSION["validuser"])){
        $validuser = $_SESSION["validuser"];
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn btn-close' data-bs-dismiss='alert'></button>
            <b>Error : </b> Please Login First
            </div>";
            header("location:index.php");
    }
?>