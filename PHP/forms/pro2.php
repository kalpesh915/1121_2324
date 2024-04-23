<?php
    if(isset($_POST["process"])){
        echo "<hr> Welcome {$_POST['fname']} {$_POST['lname']} <hr>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <lable for="fname">Enter First Name :</label>
        <input type="text" name="fname" id="fname"><br>
        <lable for="lname">Enter Last Name :</label>
        <input type="text" name="lname" id="lname"><br>
        <input type="submit" value="Send Data" name="process">
        <input type="reset" value="Reset"> 
    </form>
</body>
</html>
