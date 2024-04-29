<?php
    session_start();
    ob_start();
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
        <label for="file1">Select Files for Upload</label>
        <input type="file" name="file1[]" id="file1" required accept=".jpg, .jpeg, .png. .gif, .svg" multiple>
        <input type="submit" value="Upload Now" name="uploadProcess">
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

        //print_r($file1);

        // count how many images selected
        $count = count($file1["name"]);

        //echo $count;

        $invaliderr = 0; 
        $oversizeerr = 0;
        $success = 0;

        // required variables
        $validTypes = ["image/jpg", "image/jpeg", "image/png", "image/svg", "image/gif"];
        $mb = 2;
        $validSize = ($mb * 1024 * 1024);

        for($i=0; $i<$count; $i++){

            $name = $file1["name"][$i];
            $source = $file1["tmp_name"][$i];
            $type = $file1["type"][$i];
            $size = $file1["size"][$i];
            $random = rand(9999, 99999);
            $date = date("dmYhisa");
            $destination = "uploads/$date $random $name";

            // check for valid file type
            if(in_array($type, $validTypes)){
                if($size < $validSize){
                    move_uploaded_file($source, $destination);
                    $success++;
                }else{
                    $oversizeerr++;
                }
            }else{
                $invaliderr++;
            }
        }

        $_SESSION["msg"] = "Total Selected files $count uplaoded files are $success,oversized $oversizeerr files and invalid $invaliderr files";
        header("location:pro8.php");
    }
?>