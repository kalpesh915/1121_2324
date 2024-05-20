<?php
    session_start();
    ob_start();

    require_once("classes/Student.class.php");

    // code for delete student
    if(isset($_GET["delete"])){
        $roll = $_GET["roll"];
        $student->deleteStudent($roll);
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add and Manage Students</title>
    <?php require_once("commons/cdn.php");?>
</head>
<body>
    <div class="container-fluid">
        <h1 class='text-center text-white bg-primary p-4'>Add and Manage Students</h1>
        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#studentForm">
            <i class="fa fa-plus"></i>
        </button>

        <?php
            require_once("commons/printsession.php");
        ?>

        <div class="collapse" id="studentForm">
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="my-3 form-floating">
                    <input type="text" name="fname" id="fname" placeholder="Enter First name" class="form-control" required autofocus>
                    <label for="fname" class="form-label">Enter First Name</label>
                </div>
                <div class="my-3 form-floating">
                    <input type="text" name="lname" id="lname" placeholder="Enter Last name" class="form-control" required>
                    <label for="lname" class="form-label">Enter Last Name</label>
                </div>
                <div class="my-3 form-floating">
                    <input type="text" name="city" id="city" placeholder="Enter City name" class="form-control" required>
                    <label for="city" class="form-label">Enter City Name</label>
                </div>
                <div class="my-3 form-floating">
                    <input type="email" name="email" id="email" placeholder="Enter Email Address" class="form-control" required>
                    <label for="email" class="form-label">Enter Email Address</label>
                </div>
                <div class="my-3 form-floating">
                    <input type="text" name="phone" id="phone" placeholder="Enter Phone Number" class="form-control" required>
                    <label for="phone" class="form-label">Enter Phone Number</label>
                </div>
                <div class="my-3 form-floating">
                    <select name="gender" id="gender" placeholder="Select Gender" class="form-control" required>
                        <option></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <label for="gender" class="form-label">Select Gender</label>
                </div>
                <div class="my-3 form-floating">
                    <input type="submit" value="Add New Student" class="btn btn-primary" name="addProcess">
                    <input type="reset" value="Reset" class="btn btn-danger">
                </div>
            </form>     
        </div>

        <hr>

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Roll</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>City</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $result = $student->getAllStudents();

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<tr>
                                    <td>$row[roll]</td>
                                    <td>$row[fname]</td>
                                    <td>$row[lname]</td>
                                    <td>$row[city]</td>
                                    <td>$row[email]</td>
                                    <td>$row[phone]</td>
                                    <td>$row[gender]</td>
                                    <td>$row[created_at]</td>
                                    <td>$row[updated_at]</td>
                                    <td>
                                        <button class='btn btn-danger' type='submit' onclick='confirmDelete($row[roll])'>
                                            <i class='fa fa-trash'></i>
                                        </button>
                                        <a href='editstudent.php?roll=$row[roll]' class='btn btn-primary'>
                                            <i class='fa fa-pen'></i>
                                        </a>
                                    </td>
                                </tr>";
                            }
                        }else{
                            echo "<tr>
                                <th colspan='10'>No Data Found in Table</th>
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<script>
    function confirmDelete(roll){
        //alert(roll);
        if(confirm("Are you sure to delete student record with  Roll No. "+roll+"?")){
            location.assign("index.php?delete=1&roll="+roll);
        }
    }
</script>

<?php
    // code for insert new data

    if(isset($_POST["addProcess"])){

        $fname = $student->filterData($_POST["fname"]);
        $lname = $student->filterData($_POST["lname"]);
        $city = $student->filterData($_POST["city"]);
        $email = $student->filterData($_POST["email"]);
        $phone = $student->filterData($_POST["phone"]);
        $gender = $student->filterData($_POST["gender"]);

        $roll = $student->addNewStudent($fname, $lname, $city, $email, $phone, $gender);

        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <b>Success : </b> New Student Created with $roll Roll Number.
        </div>";

        header("location:index.php");
    }
?>