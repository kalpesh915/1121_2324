<?php
require_once("commons/session.php");
require_once("classes/Team.class.php");

if(isset($_GET["teamid"])){
    $teamid = $team->filterData($_GET["teamid"]);

    $result = $team->getOneTeamMember($teamid);

    $row = $result->fetch_assoc();

    extract($row);
}else{
    header("location:team");
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
                        <h1 class="h3 mb-0 text-gray-800">Add / Manage Team</h1>
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

                                    <div id="addnew">
                                        <div class="text-center p-5">
                                            <img src="<?= $memberphoto; ?>" class="img-rounded rounded-circle w-50">
                                        </div>
                                        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])."?teamid=$teamid"; ?>" method="post" enctype="multipart/form-data">
                                            <div class="my-3">
                                                <label for="membername">Enter Member Name</label>
                                                <input type="text" name="membername" id="membername" required class="form-control" value="<?= $membername; ?>">
                                            </div>
                                            <div class="my-3">
                                                <label for="memberdesignation">Enter Member Designation</label>
                                                <input type="text" name="memberdesignation" id="memberdesignation" required class="form-control" value="<?= $memberdesignation; ?>">
                                            </div>
                                            <div class="my-3">
                                                <label for="memberdescription">Enter Member Description</label>
                                                <input type="text" name="memberdescription" id="memberdescription" required class="form-control" value="<?= $memberdescription; ?>">
                                            </div>

                                            <div class="my-3">
                                                <label for="memberfacebook">Enter Member Facebook Link</label>
                                                <input type="url" name="memberfacebook" id="memberfacebook" class="form-control" value="<?= $memberfacebook; ?>">
                                            </div>
                                            <div class="my-3">
                                                <label for="memberinstagram">Enter Member Instagram Link</label>
                                                <input type="url" name="memberinstagram" id="memberinstagram" class="form-control" value="<?= $memberinstagram; ?>">
                                            </div>
                                            <div class="my-3">
                                                <label for="membertwitter">Enter Member Twitter Link</label>
                                                <input type="url" name="membertwitter" id="membertwitter" class="form-control" value="<?= $membertwitter; ?>">
                                            </div>
                                            <div class="my-3">
                                                <label for="memberlinkedin">Enter Member Linkedin Link</label>
                                                <input type="url" name="memberlinkedin" id="memberlinkedin" class="form-control" value="<?= $memberlinkedin; ?>">
                                            </div>
                                            <div class="my-3">
                                                <label for="memberyoutube">Enter Member Youtube Link</label>
                                                <input type="url" name="memberyoutube" id="memberyoutube" class="form-control" value="<?= $memberyoutube; ?>">
                                            </div>
                                            <div class="my-3">
                                                <label for="membersnapchat">Enter Member Snapchat Link</label>
                                                <input type="url" name="membersnapchat" id="membersnapchat" class="form-control" value="<?= $membersnapchat; ?>">
                                            </div>
                                            <div class="my-3">
                                                <label for="membertelegram">Enter Member Telegram Link</label>
                                                <input type="url" name="membertelegram" id="membertelegram" class="form-control" value="<?= $membertelegram; ?>">
                                            </div>
                                            <div class="my-3">
                                                <label for="memberphoto">Select Member Photo</label>
                                                <input type="file" name="memberphoto" id="memberphoto" accept=".jpg, .jpeg" class="form-control">
                                            </div>
                                            <div class="my-3">
                                                <input type="submit" value="Update Team Member" class="btn btn-primary" name="updateProcess">
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

<?php
// update member code
if (isset($_POST["updateProcess"])) {
    $membername = $team->filterData($_POST["membername"]);
    $memberdesignation = $team->filterData($_POST["memberdesignation"]);
    $memberdescription = $team->filterData($_POST["memberdescription"]);
    $memberfacebook = $team->filterData($_POST["memberfacebook"]);
    $memberinstagram = $team->filterData($_POST["memberinstagram"]);
    $membertwitter = $team->filterData($_POST["membertwitter"]);
    $memberlinkedin = $team->filterData($_POST["memberlinkedin"]);
    $memberyoutube = $team->filterData($_POST["memberyoutube"]);
    $membersnapchat = $team->filterData($_POST["membersnapchat"]);
    $membertelegram = $team->filterData($_POST["membertelegram"]);

    $memberphoto = $_FILES["memberphoto"];

    $destination = null;

    if($memberphoto["name"] != ""){
        $name = $memberphoto["name"];
        $source = $memberphoto["tmp_name"];
        $type = $memberphoto["type"];
        $validtypes = ["image/jpg", "image/jpeg"];
        $date = date("dmYHis");
        $random = rand(9999, 99999);

        if (in_array($type, $validtypes)) {
            $destination = "memberphotos/$membername $date $random $name";
            move_uploaded_file($source, $destination);
        }else {
            $_SESSION["msg"] = "<div class='alert alert-info alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>Error!</strong> Please Select Valid File Only
                </div>";
        }
    }


    $team->updateTeamMember($teamid, $membername, $memberdesignation, $memberdescription, $memberfacebook, $memberinstagram, $membertwitter, $memberlinkedin, $memberyoutube, $membersnapchat, $membertelegram, $destination);
    $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    <strong>Success!</strong> New Team Member $membername Updated in Database</div>";

    $team->logWriter($adminemail, "New Team Member $membername Update in Database");
    
    header("location:editteam?teamid=$teamid");
}
?>