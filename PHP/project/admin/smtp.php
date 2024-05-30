<?php
    require_once("commons/session.php");
    require_once("classes/SMTP.class.php");

    $smtpResult = $smtp->getSMTPConfig();
    $smtpRow = $smtpResult->fetch_assoc();
    extract($smtpRow);
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
                        <h1 class="h3 mb-0 text-gray-800">SMTP Config</h1>
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
                                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                        <div class="my-2">
                                            <label for="smtphostname">Enter SMTP Hostname</label>
                                            <input type="text" name="smtphostname" id="smtphostname" class="form-control" required value="<?= $smtphostname; ?>">
                                        </div>

                                        <div class="my-2">
                                            <label for="smtpusername">Enter SMTP Username</label>
                                            <input type="text" name="smtpusername" id="smtpusername" class="form-control" required value="<?= $smtpusername; ?>">
                                        </div>

                                        <div class="my-2">
                                            <label for="smtppassword">Enter SMTP Password</label>
                                            <div class="input-group">
                                            <input type="password" name="smtppassword" id="smtppassword" class="form-control" required value="<?= $smtppassword; ?>">
                                            <div class="input-group-append">
                                            <button id="btn1" type="button" class="btn btn-primary ">Show</button></div>
                                        </div>
                                        </div>

                                        <div class="my-2">
                                            <label for="smtpsecure">Enter SMTP Secure Protocol</label>
                                            <input type="text" name="smtpsecure" id="smtpsecure" class="form-control" required value="<?= $smtpsecure; ?>">
                                        </div>

                                        <div class="my-2">
                                            <label for="smtpport">Enter SMTP Port</label>
                                            <input type="number" name="smtpport" id="smtpport" class="form-control" required value="<?= $smtpport; ?>">
                                        </div>

                                        <div class="my-2">
                                            <label for="otptimelimit">Enter OPT Validity in Minutes</label>
                                            <input type="number" name="otptimelimit" id="ottimelimit" min="1" class="form-control" required value="<?= $otptimelimit; ?>">
                                        </div>

                                        <div class="my-2">
                                            <input type="submit" value="Update SMTP Config" class="btn btn-primary" name="updateProcess">
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

<script>
    $("#btn1").click(function(){
        if($("#smtppassword").attr("type") == "password"){
            $("#smtppassword").attr("type", "text");
            $("#btn1").removeClass("btn-primary").addClass("btn-danger").text("Hide");
        }else{
            $("#smtppassword").attr("type", "password");
            $("#btn1").removeClass("btn-danger").addClass("btn-primary").text("Show");
        }
    });
</script>

<?php
    if(isset($_POST["updateProcess"])){
        $smtphostname = $smtp->filterData($_POST["smtphostname"]);
        $smtpusername = $smtp->filterData($_POST["smtpusername"]);
        $smtppassword = $smtp->filterData($_POST["smtppassword"]);
        $smtpsecure = $smtp->filterData($_POST["smtpsecure"]);
        $smtpport = $smtp->filterData($_POST["smtpport"]);
        $otptimelimit = $smtp->filterData($_POST["otptimelimit"]);

        $smtp->updateSMTPConfig($smtphostname, $smtpusername, $smtppassword, $smtpsecure, $smtpport, $otptimelimit);

        $smtp->logWriter($adminemail, "SMTP Configuration Updated to : $smtphostname, $smtpusername, $smtppassword, $smtpsecure, $smtpport, $otptimelimit");

        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <strong>Success!</strong> SMTP Configuration Updated 
        </div>";
        header("location:smtp");

    }
?>