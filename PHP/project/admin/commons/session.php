<?php
    session_start();
    ob_start();
    date_default_timezone_set("Asia/Kolkata");

    if(isset($_SESSION["adminemail"])){
        $adminemail = $_SESSION["adminemail"];
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <strong>Error!</strong> Please Login First.
        </div>";

        header("location:index");
    }
?>