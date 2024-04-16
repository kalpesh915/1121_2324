<!-- 
    Receive data in same page
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <label>Enter Email Address :</label>
        <input type="email" name="email" id="em" required><br>
        <label>Enter Password :</label>
        <input type="password" name="upass" id="up" required><br>
        <input type="submit" value="Send Data" name="process">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php
    if(isset($_POST["process"])){
        echo "<hr> Welcome ".$_POST["email"]." your Password is ".$_POST["upass"];
    }
    
?>