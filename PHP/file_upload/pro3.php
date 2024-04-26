<?php
    session_start();
    /*
        code for upload only image files
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <label for="file1">Select Any file for Upload : </label>
        <input type="file" name="file1" id="file1" required accept=".jpg, .jpeg, .png, .svg, .gif">
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
        // print_r($file1);
  
        // code for upload file
        $name = $file1["name"];
        $source = $file1["tmp_name"];
        $type = $file1["type"];
        $destination = "uploads/$name";
        $validTypes = ["image/jpg", "image/jpeg", "image/png", "image/svg", "image/png"];

        if(in_array($type, $validTypes)){
            move_uploaded_file($source, $destination);
            $_SESSION["msg"] = "$name File Uploaded on Server";
        }else{
            $_SESSION["msg"] = "Please Select Valid Image File Only";
        }

        header("location:pro3.php");
    }
?>