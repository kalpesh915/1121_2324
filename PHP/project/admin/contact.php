<?php
    require_once("commons/session.php");
    require_once("classes/Contact.class.php");

    $result = $contact->getContactDetails();
    $row = $result->fetch_assoc();
    extract($row);
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
                        <h1 class="h3 mb-0 text-gray-800">Contact US</h1>
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
                                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                        <div class="my-3">
                                            <label for="contactperson">Enter Name of Contact Person</label>
                                            <input type="text" name="contactperson" id="contactperson" required class="form-control" value="<?= $contactperson;?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="phone1">Enter Phone 1</label>
                                            <input type="text" name="phone1" id="phone1" required class="form-control" value="<?= $phone1;?>" pattern="[0-9]{10,13}">
                                        </div>

                                        <div class="my-3">
                                            <label for="phone2">Enter Phone 2</label>
                                            <input type="text" name="phone2" id="phone2" required class="form-control" value="<?= $phone2;?>" pattern="[0-9]{10,13}">
                                        </div>

                                        <div class="my-3">
                                            <label for="email1">Enter Email 1</label>
                                            <input type="email" name="email1" id="email1" required class="form-control" value="<?= $email1;?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="email2">Enter Email 2</label>
                                            <input type="email" name="email2" id="email2" required class="form-control" value="<?= $email2;?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="address">Enter Address</label>
                                            <textarea name="address" id="address" required class="form-control" style="resize: none;"><?= $address; ?></textarea>
                                        </div>

                                        <div class="my-3">
                                            <label for="googlemap">Enter Google Map URL</label>
                                            <textarea name="googlemap" id="googlemap" required class="form-control" style="resize: none;"><?= $googlemap;?></textarea>
                                        </div>

                                        <div class="my-3">
                                            <input type="submit" value="Update Details" class="btn btn-primary" name="updateProcess">
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
    if(isset($_POST["updateProcess"])){
        $contactperson = $contact->filterData($_POST["contactperson"]);
        $phone1 = $contact->filterData($_POST["phone1"]);
        $phone2 = $contact->filterData($_POST["phone2"]);
        $email1 = $contact->filterData($_POST["email1"]);
        $email2 = $contact->filterData($_POST["email2"]);
        $address = $contact->filterData($_POST["address"]);
        $googlemap = $contact->filterData($_POST["googlemap"]);

        $contact->updateContact($contactperson, $phone1, $phone2, $email1, $email2, $address, $googlemap);

        $contact->logWriter($adminemail, "Contact Details Updated to $contactperson, $phone1, $phone2, $email1, $email2, $address, $googlemap");

        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <strong>Success!</strong> Contact Details are Updated
        </div>";

        header("location:contact");

    }
?>