<?php
    $fnameerr = $lnameerr = $emailerr = $websiteerr = "";
    if(isset($_POST["process"])){
        if(empty($_POST["fname"])){
            $fnameerr = "First Name is Required";
            $fname = "";
        }else{
            $fname = filterData($_POST["fname"]);
        }

        if(empty($_POST["lname"])){
            $lnameerr = "Last Name is Required";
            $lname = "";
        }else{
            $lname = filterData($_POST["lname"]);
        }

        if(empty($_POST["email"])){
            $emailerr = "Email Address is Required";
            $email = "";
        }else{
            $email = filterData($_POST["email"]);

            // filter for email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                $emailerr = "Invalid Email Address";
                $email = "";
            }
        }

        if(empty($_POST["web"])){
            $websiteerr = "Website is Required";
            $web = "";
        }else{
            $web = filterData($_POST["web"]);
            // filter for email
            if(filter_var($web, FILTER_VALIDATE_URL) === false){
                $websiteerr = "Invalid Website URL";
                $web = "";
            }
        }
        echo "<hr> Welcome {$fname} {$lname} Email is {$email} and Website is {$web}<hr>";
    }

    function filterData($data){
        $data = trim($data); // remove extra space from data
        $data = htmlspecialchars($data); // convert html code to html entity
        $data = stripcslashes($data);
        return $data;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <lable for="fname">Enter First Name :</label>
        <input type="text" name="fname" id="fname"> <span class="error">* <?php echo $fnameerr; ?></span><br>
        <lable for="lname">Enter Last Name :</label>
        <input type="text" name="lname" id="lname"> <span class="error">* <?php echo $lnameerr; ?></span><br>
        <lable for="email">Enter Email Address :</label>
        <input type="text" name="email" id="email"> <span class="error">* <?php echo $emailerr; ?></span><br>
        <lable for="web">Enter Website URL :</label>
        <input type="text" name="web" id="web"> <span class="error">* <?php echo $websiteerr; ?></span><br>
        <input type="submit" value="Send Data" name="process">
        <input type="reset" value="Reset"> 
    </form>
</body>
</html>
