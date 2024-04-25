<?php
    session_start();

    if(isset($_SESSION["validuser"])){
        unset($_SESSION["validuser"]);
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button class='btn btn-close' data-bs-dismiss='alert'></button>
        <b>Success : </b> Logout Successfully
        </div>";
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
        <button class='btn btn-close' data-bs-dismiss='alert'></button>
        <b>Error : </b> Please Login First
        </div>";
    }
    header("location:index.php");
?>