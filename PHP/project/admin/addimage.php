<?php
    require_once("commons/session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
        require_once("commons/meta.php");
        require_once("commons/title.php");
    ?>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php require_once("commons/sidebar.php"); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php require_once("commons/topbar.php"); ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add New Image</h1>
                        <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="history.back();"><i class="fa fa-arrow-left fa-sm text-white-50"></i>Back</button>
                    </div>

                    <?php
                        //require_once("commons/datacount.php");  
                    ?>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                                </div>
                                <?php
                                    require_once("commons/sessionprinter.php");
                                ?>
                                <div class="card-body">
                                    <!-- code here -->
                                     <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" enctype="multipart/form-data">
                                        <div class="my-3">
                                            <label for="imagetitle">Enter Image Title</label>
                                            <input type="text" name="imagetitle" id="imagetitle" required class="form-control">
                                        </div>

                                        <div class="my-3">
                                            <label for="imagedescription">Enter Image Description</label>
                                            <textarea name="imagedescription" id="imagedescription" required class="form-control" style="resize: none;"></textarea>
                                        </div>

                                        <div class="my-3">
                                            <label for="imagefile">Select Image </label>
                                            <input type="file" name="imagefile" id="imagefile" required class="form-control" accept=".jpg, .jpeg">
                                        </div>

                                        <div class="my-3">
                                            <label for="imagetype">Select Image Type</label>
                                            <select name="imagetype" id="imagetype" required class="form-control">
                                                <option value="1">Slider</option>
                                                <option value="2">Gallery</option>
                                            </select>
                                        </div>

                                        <div class="my-2">
                                            <input type="submit" value="Add Image" class="btn btn-primary" name="uploadProcess">
                                            <input type="reset" value="Reset" class="btn btn-danger">
                                        </div>
                                     </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <?php require_once("commons/footer.php"); ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->

</body>
</html>

<?php
    if(isset($_POST["uploadProcess"])){
        require_once("classes/Images.class.php");
        $imagetitle = $images->filterData($_POST["imagetitle"]);
        $imagedescription = $images->filterData($_POST["imagedescription"]);
        $imagetype = $images->filterData($_POST["imagetype"]);

        $imagefile = $_FILES["imagefile"];

        // image upload code
        $name = $imagefile["name"];
        $source = $imagefile["tmp_name"];
        $type = $imagefile["type"];
        $date = date("dmY_His");
        $random = rand(999, 9999);
        $validtypes = ["image/jpg", "image/jpeg"];

        if(in_array($type, $validtypes)){
            if($imagetype == 1){
                $destination = "images/slider $date $random $name";
            }else{
                $destination = "images/gallery $date $random $name";
            }

            move_uploaded_file($source, $destination);

            $images->addNewImage($imagetitle, $imagedescription, $destination, $imagetype);
            $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>Success!</strong> New Image Uplaoded with Name $destination </div>";

            $images->logWriter($adminemail, "New Image Uplaoded with Name $destination");
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>Error!</strong> Please Select Valid File Only.</div>";
        }

        header("location:addimage");
    }
?>