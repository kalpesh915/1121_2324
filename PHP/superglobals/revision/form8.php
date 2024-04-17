<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <label for="ct">Select Your City : </label>
        <input type="radio" name="city" value="Rajkot" checked>Rajkot 
        <input type="radio" name="city" value="Suart">Surat 
        <input type="radio" name="city" value="Ahandabad">Ahamdabad 
        <input type="radio" name="city" value="Baroda">Baroda
        <input type="radio" name="city" value="Bhuj">Bhuj 
        <hr>
        <input type="submit" value="Send Data" name="sumbitProcess">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["sumbitProcess"])){
        echo "<hr> Welcome  to {$_POST['city']}";
    }
?>