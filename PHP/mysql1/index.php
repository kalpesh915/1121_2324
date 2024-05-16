<?php
    // this file used to view of page
    session_start();
    ob_start();

    require_once("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title>
    <?php require_once("cdn.php"); ?>
</head>
<body>
    <div class="container-fluid">
        <h1 class="text-center text-white bg-primary p-4">Add New Student</h1>
        <!-- code for printing session messages -->

        <?php
            if(isset($_SESSION["msg"])){
                echo $_SESSION["msg"];
                unset($_SESSION["msg"]);
            }
        ?>
        <button type="button" class="btn btn-info" data-bs-toggle="collapse" data-bs-target="#addNew"><i class="fa fa-plus"></i></button>
        <div id="addNew" class="collapse">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="my-3 form-floating">
                <input type="text" name="fname" id="lname" placeholder="Enter First Name" class="form-control" required autofocus>
                <label for="fname" class="form-label">Enter First Name</label>
            </div>

            <div class="my-3 form-floating">
                <input type="text" name="lname" id="lname" placeholder="Enter Last Name" class="form-control" required>
                <label for="lname" class="form-label">Enter Last Name</label>
            </div>

            <div class="my-3 form-floating">
                <input type="text" name="city" id="city" placeholder="Enter City Name" class="form-control" required>
                <label for="city" class="form-label">Enter City Name</label>
            </div>

            <div class="my-3 form-floating">
                <input type="email" name="email" id="email" placeholder="Enter Email Address" class="form-control" required>
                <label for="email" class="form-label">Enter Email Address</label>
            </div>

            <div class="my-3 form-floating">
                <input type="text" name="phone" id="phone" placeholder="Enter Phone Number" class="form-control" required pattern="[0-9]{10,13}">
                <label for="phone" class="form-label">Enter Phone Number</label>
            </div>

            <div class="my-3 form-floating">
                <select name="gender" id="gender" placeholder="Select gender" class="form-control" required>
                    <option></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <label for="gender" class="form-label">Select Gender</label>
            </div>

            <div class="my-3">
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
                    $sqlquery = "select * from students";

                    $result = $connection->query($sqlquery);

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
                                    <a href=''class='btn btn-primary'>
                                    <i class='fa fa-pen'></i></a>
                                    <a href=''class='btn btn-danger'>
                                    <i class='fa fa-trash'></i></a>
                                </td>
                            </tr>";
                        }
                    }else{
                        echo "<tr>
                            <th colspan='9'>No Data Found in Table</th>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>

<?php
    // code for add new student in database

    function filterData($data){
        // filter function for remove any unwanter data from input form
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }

    if(isset($_POST["addProcess"])){
        // get data from form
        $fname = filterData($_POST["fname"]); 
        $lname = filterData($_POST["lname"]); 
        $city = filterData($_POST["city"]); 
        $email = filterData($_POST["email"]); 
        $phone = filterData($_POST["phone"]); 
        $gender = filterData($_POST["gender"]); 

        // build a query to run on server
        $sqlquery = "insert into students (fname, lname, city, email, phone, gender) values ('$fname', '$lname', '$city', '$email', '$phone', '$gender')";
        
        // code for execute query on mysql server
        $connection->query($sqlquery);

        $roll = $connection->insert_id;

        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <b>Success : </b> New Student Created in Database with $roll Roll Number.
        </div>";

        header("location:index.php");
    }
?>