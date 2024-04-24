<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="filename">Enter File Name : </label>
        <input type="text" name="filename" id="filename" required>
        <hr>
        <input type="submit" value="Read Data" name="readProcess">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php
    if(isset($_POST["readProcess"])){
        $filename = $_POST["filename"];
       
        $file1 = fopen($filename, "r") or die("Unable to Open File");
        echo "<hr>Data From File is : ".fread($file1, filesize($filename));
        fclose($file1);

        echo "<hr>File Reading Completed<hr>";
    }
?>