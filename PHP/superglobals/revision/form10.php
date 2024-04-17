<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <label for="email">Enter Email Address : </label>
        <input type="email" name="email" id="email" required><br>
        <label for="upass">Enter Your Password</label>
        <input type="password" name="upass" id="upass" required><br>
        <input type="submit" value="Send Data" name="loginProcess">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["loginProcess"])){
        $email = $_POST["email"];
        $upass = $_POST["upass"];

        //echo "Welcome $email your Password is $upass";

        if($email == "pooja@gmail.com" && $upass == "admin"){
            echo "<hr> Welcome Admin User";
        }else{
            echo "<hr> Welcome Guest User";
        }
    }
?>  