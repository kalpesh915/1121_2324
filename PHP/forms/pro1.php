<?php
    if(isset($_GET["process"])){
        echo "<hr> Welcome {$_GET['fname']} {$_GET['lname']} <hr>";
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
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
        <lable for="fname">Enter First Name :</label>
        <input type="text" name="fname" id="fname" required><br>
        <lable for="lname">Enter Last Name :</label>
        <input type="text" name="lname" id="lname" required><br>
        <input type="submit" value="Send Data" name="process">
        <input type="reset" value="Reset"> 
    </form>
</body>
</html>
