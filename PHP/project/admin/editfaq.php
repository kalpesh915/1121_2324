<?php
require_once("commons/session.php");
require_once("classes/FAQ.class.php");

if(isset($_GET["faqid"])){
    $faqid = $faq->filterData($_GET["faqid"]);

    // code for update category
    if(isset($_POST["updateProcess"])){
        $question = $faq->filterData($_POST["question"]);
        $answer = $faq->filterData($_POST["answer"]);
        $faq->updateFAQ($faqid, $question, $answer);
        $faq->logWriter($adminemail, "$question Updated in Database");
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <strong>Success!</strong> $question Updated in Database</div>";
    }

    $result = $faq->getOneFAQ($faqid);
    extract($result->fetch_assoc());
}else{
    header("location:faq");
}


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
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                        <h1 class="h3 mb-0 text-gray-800">Add / Manage FAQ</h1>
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
                                    <div class="" id="addform">
                                        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])."?faqid=$faqid"; ?>" method="post">
                                        <div class="my-3">
                                                <label for="question">Enter FAQ Question</label>
                                                <textarea name="question" id="question" required class="form-control" style="resize: none;"><?= $question;?></textarea>
                                            </div>

                                            <div class="my-3">
                                                <label for="answer">Enter FAQ Answer</label>
                                                <textarea name="answer" id="answer" required class="form-control" style="resize: none;"><?= $answer;?></textarea>
                                            </div>


                                            <div class="my-3">
                                                <input type="submit" value="Update Now" class="btn btn-primary" name="updateProcess">
                                                <input type="reset" value="Reset" class="btn btn-danger">
                                            </div>
                                        </form>
                                    </div>
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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
