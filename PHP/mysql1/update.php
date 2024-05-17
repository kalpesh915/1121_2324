<?php
    session_start();
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <?php 
        require_once("cdn.php"); 
        require_once("connection.php");

        // code for update student data 
        if(isset($_GET["update"])){
            $roll = $_POST["roll"];
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $city = $_POST["city"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $gender = $_POST["gender"];

            $sqlquery = "update students set fname = '$fname', lname = '$lname', city = '$city', email = '$email', phone = '$phone', gender = '$gender' where roll = $roll";

            $connection->query($sqlquery);

            $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <b>Success : </b> Data Updated Successfully.
            </div>";
        }

        if(isset($_GET["roll"])){
            $roll = $_GET["roll"];
            //echo "Roll no. for Update is $roll";

            $sqlquery = "select * from students where roll = $roll";

            $result = $connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                extract($row);
            }

            //echo $gender;
        }
    ?>
</head>
<body>
    <div class="container-fluid">
        <h1 class="text-center text-white bg-primary p-4">Update Student Details</h1>

        <?php
            if(isset($_SESSION["msg"])){
                echo $_SESSION["msg"];
                unset($_SESSION["msg"]);
            }
        ?>
        <a href="index.php" class="btn btn-primary">Home</a>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])."?update=1&roll=$roll";?>" method="post">
            <div class="my-3 form-floating">
                <input type="text" name="roll" id="roll" required class="form-control" placeholder="Enter Roll Number" value="<?= $roll ?>" readonly>
                <label for="roll" class="form-label">Enter Roll Number</label>
            </div>

            <div class="my-3 form-floating">
                <input type="text" name="fname" id="fname" required class="form-control" placeholder="Enter First Name" value="<?= $fname; ?>">
                <label for="fname" class="form-label">Enter First Name</label>
            </div>

            <div class="my-3 form-floating">
                <input type="text" name="lname" id="lname" required class="form-control" placeholder="Enter Last Name" value="<?= $lname; ?>">
                <label for="lname" class="form-label">Enter Last Name</label>
            </div>

            <div class="my-3 form-floating">
                <input type="text" name="city" id="city" required class="form-control" placeholder="Enter City Name" value="<?= $city; ?>">
                <label for="city" class="form-label">Enter City Name</label>
            </div>

            <div class="my-3 form-floating">
                <input type="email" name="email" id="email" required class="form-control" placeholder="Enter Email Address" value="<?= $email; ?>">
                <label for="email" class="form-label">Enter Email Address</label>
            </div>

            <div class="my-3 form-floating">
                <input type="text" name="phone" id="phone" required class="form-control" placeholder="Enter Phone Number" value="<?= $phone; ?>" pattern="[0-9]{10,13}">
                <label for="phone" class="form-label">Enter Phone Number</label>
            </div>

            <div class="my-3 form-floating">
                <select name="gender" id="gender" required class="form-control" placeholder="Select Gender">
                    <?php 
                        if($gender == "Male"){
                            echo "<option value='Male' selected>Male</option>
                            <option value='Female'>Female</option>";
                        }else if($gender == "Female"){
                            echo "<option value='Male'>Male</option>
                            <option value='Female' selected>Female</option>";
                        }
                    ?>
                </select>
                <label for="gender" class="form-label">Select Gender</label>
            </div>

            <div class="my-3">
                <input type="submit" value="Update Data" name="updateProcess" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>
</html>