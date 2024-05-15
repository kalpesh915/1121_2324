<?php
    /*
        Example  of Pagination
    */

    $connection = new mysqli("localhost", "root", "", "1121demo");
    if($connection->connect_error){
        die("<hr> Connection Failed ".$connection->connect_error);
    }

    // count how many rows in table
    $sqlquery = "select count(roll) from students";
    $result = $connection->query($sqlquery);

    while($row = $result->fetch_assoc()){
        $rows = $row["count(roll)"];
    }

    //echo "Total Rows is $rows";

    if(isset($_GET["page"])){
        $page = $_GET["page"];
    }else{
        $page = 0;
    }

    $pagesize = 10;
    $pages = ceil($rows / $pagesize);

    //echo "Pages is $pages";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <h1 class="bg-primary text-center text-white p-4">Students Data</h1>

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
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
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $offset = ($page * $pagesize);
                        $sqlquery = "select * from students limit $pagesize offset $offset";
                        $result = $connection->query($sqlquery);

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
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <div class=" p-3">
            <ul class="pagination text-center">
            <?php
                for($i=0; $i<$pages; $i++){
                    echo "<li class='page-item'><a class='page-link' href='pro17.php?page=$i'>".($i+1)."</a></li>";
                }
            ?>
            </ul>
        </div>
    </div>
</body>
</html>