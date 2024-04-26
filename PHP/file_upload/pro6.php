<?php
    session_start();
    date_default_timezone_set("Asia/Kolkata");
    /*
        upload file example : file not overwrite, upload only images, file less than 2Mb
        generate random file name
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
        <input type="file" name="file1" id="file1" required accept=".jpg, .jpeg, .png, 
        .gif, .svg">
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
        $size = $file1["size"];
        $type = $file1["type"];

        $mb = 2;
        $validSize = ($mb * 1024 * 1024);

        $validTypes = ["image/jpg", "image/jpeg", "image/png", "image/svg", "image/gif"];

        $date = date("dmYhisa");
        $random = rand(9999, 99999);
        $destination = "uploads/$date $random $name";

        // code for check valid file types
        if(in_array($type, $validTypes)){
            // code for check valid file size
            if($size < $validSize){
                // code for check file existance
                if(!file_exists($destination)){
                    // file uplaod code
                    move_uploaded_file($source, $destination);
                    $_SESSION["msg"] = "$name File Uploade on Server";
                }else{
                    $_SESSION["msg"] = "$name File Already Exist on Server";
                }
            }else{
                $_SESSION["msg"] = "Please Select file less than $mb Mb";
            }
        }else{
            $_SESSION["msg"] = "Please Select Valid Image Files Only";
        }

        header("location:pro6.php");
    }
?>