<?php
require_once("commons/session.php");
require_once("classes/Category.class.php");



if(isset($_GET["status"])){
    $categoryid = $category->filterData($_GET["categoryid"]);
    $status = $category->filterData($_GET["status"]);

    $category->changeCategoryStatus($categoryid, $status);
    header("location:category");
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
                        <h1 class="h3 mb-0 text-gray-800">Add / Manage Category</h1>
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
                                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#addform">Add New</button>
                                </div>
                                <?php
                                require_once("commons/sessionprinter.php");
                                ?>
                                <div class="card-body">
                                    <!-- code here -->
                                    <div class="collapse" id="addform">
                                        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                            <div class="my-3">
                                                <label for="categoryna,e">Enter Category Name</label>
                                                <input type="text" name="categoryname" id="categoryname" required class="form-control">
                                            </div>

                                            <div class="my-3">
                                                <input type="submit" value="Add Now" class="btn btn-primary" name="addProcess">
                                                <input type="reset" value="Reset" class="btn btn-danger">
                                            </div>
                                        </form>
                                    </div>
                                        <hr>
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Category Name</th>
                                                    <th>Status</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Category Name</th>
                                                    <th>Status</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php 
                                                    $result = $category->getAllCategory();

                                                    while($row = $result->fetch_assoc()){

                                                        if($row["status"] == 0){
                                                            $statusbtn = "<a href='category?categoryid=$row[categoryid]&status=1' class='btn btn-success'>Enable</a>";
                                                        }else{
                                                            $statusbtn = "<a href='category?categoryid=$row[categoryid]&status=0' class='btn btn-danger'>Disable</a>";
                                                        }

                                                        echo "<tr>
                                                            <td>$row[categoryname]</td>
                                                            <td>$statusbtn</td>
                                                            <td><a href='editcategory?categoryid=$row[categoryid]' class='btn btn-primary'>Edit</a></td>
                                                        </tr>";
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
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

<?php
    if(isset($_POST["addProcess"])){
        $categoryname = $category->filterData($_POST["categoryname"]);

        if($category->addNewCategory($categoryname)){
            $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>Success!</strong> $categoryname Category Added in Database
            </div>";
            $category->logWriter($adminemail, "$categoryname added in database");
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>Error!</strong> $categoryname Category Already Exist in Database
            </div>";
        }

        header("location:category");
    }
?>