<?php
    $fnameerr = $lnameerr = "";
    if(isset($_POST["process"])){
        if(empty($_POST["fname"])){
            $fnameerr = "First Name is Required";
        }

        if(empty($_POST["lname"])){
            $lnameerr = "Last Name is Required";
        }
        //echo "<hr> Welcome {$_POST['fname']} {$_POST['lname']} <hr>";
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
        <input type="submit" value="Send Data" name="process">
        <input type="reset" value="Reset"> 
    </form>
</body>
</html>
