<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <?php require_once("cdn.php"); ?>
</head>
<body>
    <div class="container-fluid">
        <h1 class="text-white bg-primary text-center p-3">Login Form</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="my-3 form-floating">
                <input type="email" name="email" id="email" required class="form-control" placeholder="Enter Email Address">
                <label for="email" class="form-label">Enter Email Address</label>
            </div>
            <div class="my-3 form-floating">
                <input type="password" name="upass" id="upass" required class="form-control" placeholder="Enter Password">
                <label for="upass" class="form-label">Enter Password</label>
            </div>

            <div class="my-3 d-flex justify-content-center">
                <input type="submit" value="Login" class="btn btn-primary mx-2" name="loginProcess">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>

            <div class="my-3">
                <?php
                    if(isset($_SESSION["msg"])){
                        echo $_SESSION["msg"];
                        unset($_SESSION["msg"]);
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST["loginProcess"])){
        $email = $_POST["email"];
        $upass = $_POST["upass"];

        if($email == "admin@gmail.com" and $upass == "admin"){
            $_SESSION["validuser"] = $email;
            header("location:home.php");
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn btn-close' data-bs-dismiss='alert'></button>
            <b>Error : </b> Invalid Username or Password
            </div>";
            header("location:index.php");
        }
    }
?>