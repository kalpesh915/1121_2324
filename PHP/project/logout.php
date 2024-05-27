<?php
    require_once("commons/session.php");
    require_once("classes/Users.class.php");

    if(isset($_SESSION["adminemail"])){
        $users->logWriter($adminemail, "Logout Successfully");
        unset($_SESSION["adminemail"]);
        
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <strong>Success!</strong> Logout Successfully
        </div>";
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <strong>Error!</strong> Invalid Attempt of Logout
        </div>";
    }
    header("location:index");
?>