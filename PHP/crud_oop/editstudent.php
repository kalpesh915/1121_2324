<?php
    session_start();
    ob_start();

    require_once("classes/Student.class.php");

    $roll = $_GET["roll"];
    //echo $roll; 

    $result = $student->getStudent($roll);

    while($row = $result->fetch_assoc()){
        ///print_r($row);
        extract($row);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <?php
        require_once("commons/cdn.php");
    ?>
</head>
<body>
    <div class="container-fluid">
        <h1 class="bg-primary text-white p-4 text-center">Edit Student</h1>
        <hr>
        <a href="index.php" class="btn btn-primary">
            <i class="fa fa-home"></i>
        </a> 
        <hr>
        <?php
            require_once("commons/printsession.php");
        ?>
        
        <div id="studentForm">
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])."?roll=$roll"; ?>" method="post">
                <div class="my-3 form-floating">
                    <input type="text" name="roll" id="roll" placeholder="Enter Roll Number" class="form-control" required readonly value="<?= $roll; ?>">
                    <label for="roll" class="form-label">Enter Roll Number</label>
                </div>
                <div class="my-3 form-floating">
                    <input type="text" name="fname" id="fname" placeholder="Enter First name" class="form-control" required autofocus value="<?= $fname; ?>">
                    <label for="fname" class="form-label">Enter First Name</label>
                </div>
                <div class="my-3 form-floating">
                    <input type="text" name="lname" id="lname" placeholder="Enter Last name" class="form-control" required value="<?= $lname; ?>">
                    <label for="lname" class="form-label">Enter Last Name</label>
                </div>
                <div class="my-3 form-floating">
                    <input type="text" name="city" id="city" placeholder="Enter City name" class="form-control" required value="<?= $city; ?>">
                    <label for="city" class="form-label">Enter City Name</label>
                </div>
                <div class="my-3 form-floating">
                    <input type="email" name="email" id="email" placeholder="Enter Email Address" class="form-control" required value="<?= $email; ?>">
                    <label for="email" class="form-label">Enter Email Address</label>
                </div>
                <div class="my-3 form-floating">
                    <input type="text" name="phone" id="phone" placeholder="Enter Phone Number" class="form-control" required value="<?= $phone; ?>">
                    <label for="phone" class="form-label">Enter Phone Number</label>
                </div>
                <div class="my-3 form-floating">
                    <select name="gender" id="gender" placeholder="Select Gender" class="form-control" required>
                        <option></option>

                        <?php 
                            /*if($gender == "Male"){
                                echo "<option value='Male' selected>Male</option><option value='Female'>Female</option>";
                            }else{
                                echo "<option value='Male'>Male</option><option value='Female' selected>Female</option>";
                            }*/
                        ?>
                        <option value="Male" <?= ($gender == "Male" ? "selected" : ""); ?>>Male</option>
                        <option value="Female" <?= ($gender == "Female" ? "selected" : ""); ?>>Female</option>
                    </select>
                    <label for="gender" class="form-label">Select Gender</label>
                </div>
                <div class="my-3 form-floating">
                    <input type="submit" value="Update Student Data" class="btn btn-primary" name="updateProcess">
                    <input type="reset" value="Reset" class="btn btn-danger">
                </div>
            </form>     
        </div>
    </div>
</body>
</html>

<?php
    if(isset($_POST["updateProcess"])){
        $roll = $student->filterData($_POST["roll"]);
        $fname = $student->filterData($_POST["fname"]);
        $lname = $student->filterData($_POST["lname"]);
        $city = $student->filterData($_POST["city"]);
        $email = $student->filterData($_POST["email"]);
        $phone = $student->filterData($_POST["phone"]);
        $gender = $student->filterData($_POST["gender"]);

        $student->updateStudent($roll, $fname, $lname, $city, $email, $phone, $gender);

        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Success : </strong> Student Data Updated Successfully
        </div>";

        header("location:editstudent.php?roll=$roll");
    }
?>