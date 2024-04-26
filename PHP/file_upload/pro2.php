<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <label for="file1">Select Any file for Upload : </label>
        <input type="file" name="file1" id="file1" required>
        <input type="submit" value="Upload File" name="uploadProcess">
        <input type="reset" value="Reset">
    </form>
    <hr>
    <?php
        if(isset($_SESSION["msg"])){
            echo $_SESSION["msg"];
            unset($_SESSION["msg"]);
        }
    ?>
</body>
</html>

<?php
    if(isset($_POST["uploadProcess"])){
        $file1 = $_FILES["file1"];

        $name = $file1["name"];
        $source = $file1["tmp_name"];
        $destination = "uploads/$name";

        // copy file on server
        move_uploaded_file($source, $destination);

        $_SESSION["msg"] = "$name File Uploaded on Server";

        header("location:pro2.php");
    }
?>