<?php
    session_start();
    date_default_timezone_set("Asia/Kolkata");
    /*
        upload files in diffrent folders
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <label for="file1">Select File for Upload : </label>
        <input type="file" name="file1" id="file1" required>
        <input type="submit" value="Upload File" name="uploadProcess">
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
        $type = $file1["type"];

        $date = date("dmYhisa");
        $random = rand(9999, 99999);

        if($type == "image/jpg" || $type == "image/jpeg"){
            $destination = "uploads/images/$date $random $name";
        }else if($type == "text/plain"){
            $destination = "uploads/text/$date $random $name";
        }else if($type == "application/pdf"){
            $destination = "uploads/pdf/$date $random $name";
        }else{
            $destination = "uploads/others/$date $random $name";
        }
        move_uploaded_file($source, $destination);
        $_SESSION["msg"] = "$name File Uploaded";

      header("location:pro7.php");
    }
?>