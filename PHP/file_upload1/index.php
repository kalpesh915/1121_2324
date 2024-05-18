<?php
    session_start();
    ob_start();

    require_once("connection.php");

    if(isset($_GET["imageid"])){
        $imageid = $_GET["imageid"];
        /// delete image from folder
        $sqlquery = "select imagepath from images where imageid = $imageid";
        $result = $connection->query($sqlquery);

        while($row = $result->fetch_assoc()){
            unlink($row["imagepath"]);
        }

        $sqlquery = "delete from images where imageid = $imageid";
        $connection->query($sqlquery);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once("cdn.php"); ?>
</head>
<body>
    <div class="container-fluid">
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <?php 
                if(isset($_SESSION["msg"])){
                    echo $_SESSION["msg"];
                    unset($_SESSION["msg"]);
                }
            ?>
            <div class="my-3 ">
                <label for="file1" class="form-label">Select File For Upload</label>
                <input type="file" name="file1" id="file1" required accept=".jpg, .png, .gif, .svg, .jpeg" placeholder="Select File For Upload">
                <br>
                <input type="submit" value="Upload File" class="btn btn-primary mx-2" name="uploadProcess"><input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
        <hr>
        <div class="row">
        <?php
            $sqlquery = "select * from images";
            $result = $connection->query($sqlquery);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "<div class='col-md-4 p-1 my-2'>
                        <img src='$row[imagepath]' class='w-100'>
                        $row[imagename] <a href='index.php?imageid=$row[imageid]' class='btn btn-danger'>
                            <i class='fa fa-trash'></i>
                        </a>
                    </div>";
                }
            }else{
                echo "<div class='alert alert-danger'><b>No Images Found in Table</b></div>";
            }
        ?>
        </div>
    </div>
</body>
</html>

<?php
    if(isset($_POST["uploadProcess"])){
        $file1 = $_FILES["file1"];

        $name = $file1["name"];
        $type = $file1["type"];
        $source = $file1["tmp_name"];
        $size = $file1["size"];

        $mb = 2;
        $fileSize = ($mb * 1024 * 1024);

        $validTypes = ["image/jpg", "image/jpeg", "image/gif", "image/png", "image/svg"];

        // code for check filesize
        if($size < $fileSize){
            if(in_array($type, $validTypes)){
                $date = date("dmY_hisa");
                $random = rand(9999, 99999);
                $destination = "uploads/$date $random $name";

                if(move_uploaded_file($source, $destination)){
                    $sqlquery = "insert into images (imagename, imagepath) values ('$name', '$destination')";

                    $connection->query($sqlquery);

                    $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
                    <button class='btn-close' data-bs-dismiss='alert'></button>
                    <b>Success : </b> $destination File Uploaded on Server.
                    </div>";
                }else{
                    $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                    <button class='btn-close' data-bs-dismiss='alert'></button>
                    <b>Error : </b> Error While Uplaoding File
                    </div>";
                }
            }else{
                $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <b>Error : </b> Please Select Valid Image File
                </div>";    
            }
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <b>Error : </b> Please Select File Lessthan $mb Mb.
            </div>";
        }

        header("location:index.php");
    }
?>

