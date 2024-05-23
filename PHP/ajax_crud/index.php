<?php
require_once("classes/Student.class.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Student</title>
    <?php require_once("cdn.php"); ?>
</head>

<body>
    <div class="container-fluid">
        <div class="d-flex justify-content-between bg-primary text-white p-3">
            <h1 class="display-1">Manage Student Records</h1>
            <button type="button" class="btn btn-dark h-75" data-bs-toggle="modal" data-bs-target="#addStudentModal"><i class="fa fa-plus"></i></button>
        </div>

        <hr>

        <div class="table-responsive">
            <table class="table table-hover table-striped" id="myStudents">
                <thead class="table-dark">
                    <tr>
                        <th>Roll</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
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

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
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
                                        <button id='viewbtn' class='btn btn-primary' value='$row[roll]'><i class='fa fa-eye'></i></button>
                                        <button id='editbtn' class='btn btn-info' value='$row[roll]'><i class='fa fa-pen'></i></button>
                                        <button id='deletebtn' class='btn btn-danger' value='$row[roll]'><i class='fa fa-trash'></i></button>
                                    </td>
                                </tr>";
                        }
                    } else {
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

<!-- Add New Student Modal -->
<div class="modal" id="addStudentModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add New Student</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="addnewstudent">
                    <div id="errormessage" class="alert d-none"></div>
                    <div class="my-3 form-floating">
                        <input type="text" name="fname" id="insfname" required placeholder="Enter First Name" class="form-control">
                        <label class="form-label" for="insfname">Enter First Name</label>
                    </div>
                    <div class="my-3 form-floating">
                        <input type="text" name="lname" id="inslname" required placeholder="Enter Last Name" class="form-control">
                        <label class="form-label" for="inslname">Enter Last Name</label>
                    </div>
                    <div class="my-3 form-floating">
                        <input type="text" name="city" id="inscity" required placeholder="Enter City Name" class="form-control">
                        <label class="form-label" for="inscity">Enter City</label>
                    </div>
                    <div class="my-3 form-floating">
                        <input type="email" name="email" id="insemail" required placeholder="Enter Email Address" class="form-control">
                        <label class="form-label" for="insemail">Enter Email Address</label>
                    </div>
                    <div class="my-3 form-floating">
                        <input type="text" name="phone" id="insphone" required placeholder="Enter Phone Number" class="form-control">
                        <label class="form-label" for="insphone">Enter Phone Number</label>
                    </div>
                    <div class="my-3 form-floating">
                        <select name="gender" id="insgender" required placeholder="Select Gender" class="form-control">
                            <option></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <label class="form-label" for="insgender">Select Gender</label>
                    </div>
                    <div class="my-3">
                        <input type="submit" value="Add New Student" class="btn btn-primary">
                        <input type="reset" value="Reset" class="btn btn-danger">
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<!--update Student Modal -->
<div class="modal" id="editStudentModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit New Student</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="updatestudent">
                    <div id="errormessage" class="alert d-none"></div>
                    <div class="my-3 form-floating">
                        <input type="text" name="roll" id="editroll" required placeholder="Enter Roll Number" class="form-control" readonly>
                        <label class="form-label" for="editroll">Enter Roll Number</label>
                    </div>
                    
                    <div class="my-3 form-floating">
                        <input type="text" name="fname" id="editfname" required placeholder="Enter First Name" class="form-control">
                        <label class="form-label" for="editfname">Enter First Name</label>
                    </div>
                    <div class="my-3 form-floating">
                        <input type="text" name="lname" id="editlname" required placeholder="Enter Last Name" class="form-control">
                        <label class="form-label" for="editlname">Enter Last Name</label>
                    </div>
                    <div class="my-3 form-floating">
                        <input type="text" name="city" id="editcity" required placeholder="Enter City Name" class="form-control">
                        <label class="form-label" for="editcity">Enter City</label>
                    </div>
                    <div class="my-3 form-floating">
                        <input type="email" name="email" id="editemail" required placeholder="Enter Email Address" class="form-control">
                        <label class="form-label" for="editemail">Enter Email Address</label>
                    </div>
                    <div class="my-3 form-floating">
                        <input type="text" name="phone" id="editphone" required placeholder="Enter Phone Number" class="form-control">
                        <label class="form-label" for="editphone">Enter Phone Number</label>
                    </div>
                    <div class="my-3 form-floating">
                        <select name="gender" id="editgender" required placeholder="Select Gender" class="form-control">
                            <option></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <label class="form-label" for="editgender">Select Gender</label>
                    </div>
                    <div class="my-3">
                        <input type="submit" value="Update Student" class="btn btn-primary">
                        <input type="reset" value="Reset" class="btn btn-danger">
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<!-- View Student Modal -->
<div class="modal" id="viewStudentModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">View New Student</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                    <div class="my-3 form-floating">
                        <input type="text" id="viewroll" required placeholder="Enter Roll Number" class="form-control" readonly>
                        <label class="form-label" for="viewroll">Enter Roll Number</label>
                    </div>
                    <div class="my-3 form-floating">
                        <input type="text" id="viewfname" required placeholder="Enter First Name" class="form-control" readonly>
                        <label class="form-label" for="viewfname">Enter First Name</label>
                    </div>
                    <div class="my-3 form-floating">
                        <input type="text" id="viewlname" required placeholder="Enter Last Name" class="form-control" readonly>
                        <label class="form-label" for="viewlname">Enter Last Name</label>
                    </div>
                    <div class="my-3 form-floating">
                        <input type="text" id="viewcity" required placeholder="Enter City Name" class="form-control" readonly>
                        <label class="form-label" for="viewcity">Enter City</label>
                    </div>
                    <div class="my-3 form-floating">
                        <input type="email" id="viewemail" required placeholder="Enter Email Address" class="form-control" readonly>
                        <label class="form-label" for="viewemail">Enter Email Address</label>
                    </div>
                    <div class="my-3 form-floating">
                        <input type="text" id="viewphone" required placeholder="Enter Phone Number" class="form-control" readonly>
                        <label class="form-label" for="viewphone">Enter Phone Number</label>
                    </div>
                    <div class="my-3 form-floating">
                        <input type="text" id="viewgender" required placeholder="Selected Gender " class="form-control" readonly>
                        <label class="form-label" for="viewgender">Selected Gender</label>
                    </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<script>
  

    /*
        code for add new student in database via AJAX | API | OOP
    */
    $(document).on("submit", "#addnewstudent", function(event) {
        event.preventDefault();
        //alert("ok");
        let formData = new FormData(this);
        formData.append("add_process", true);
        //console.log(formData);

        $.ajax({
            type : "POST",
            url : "studentapi.php",
            data : formData,
            processData : false, 
            contentType : false,
            success : function(response){
                const jsonResponse = jQuery.parseJSON(response);

                if(jsonResponse.status == 422){
                    $("#errormessage").removeClass("d-none");
                    $("#errormessage").addClass("alert-danger");
                    $("#errormessage").text(jsonResponse.message);
                }else if(jsonResponse.status == 200){
                    $("#addStudentModal").modal("hide");
                    $("#addnewstudent")[0].reset();

                    alertify.set("notifier", "position", "top-right");
                    alertify.success(jsonResponse.message);

                    $("#myStudents").load(location.href+" #myStudents");
                }else if(jsonResponse.status == 500){
                    $("#errormessage").removeClass("d-none");
                    $("#errormessage").addClass("alert-danger");
                    $("#errormessage").text(jsonResponse.message);
                }
            }
        });
    });

    /*
        update student data
    */
    $(document).on("submit", "#updatestudent", function(event) {
        event.preventDefault();
        //alert("ok");
        let formData = new FormData(this);
        formData.append("update_process", true);
        //console.log(formData);

        $.ajax({
            type : "POST",
            url : "studentapi.php",
            data : formData,
            processData : false, 
            contentType : false,
            success : function(response){
                const jsonResponse = jQuery.parseJSON(response);

                if(jsonResponse.status == 422){
                    $("#errormessage").removeClass("d-none");
                    $("#errormessage").addClass("alert-danger");
                    $("#errormessage").text(jsonResponse.message);
                }else if(jsonResponse.status == 200){
                    $("#editStudentModal").modal("hide");
                    $("#updatestudent")[0].reset();

                    alertify.set("notifier", "position", "top-right");
                    alertify.success(jsonResponse.message);

                    $("#myStudents").load(location.href+" #myStudents");
                }else if(jsonResponse.status == 500){
                    $("#errormessage").removeClass("d-none");
                    $("#errormessage").addClass("alert-danger");
                    $("#errormessage").text(jsonResponse.message);
                }
            }
        });
    });


    // view student code
    $(document).on("click", "#viewbtn", function(event){
        //alert($(this).val());
        const roll = $(this).val();

        $.ajax({
            type: "GET",
            url : "studentapi.php?roll="+roll,
            success : function(response){
                //console.log(response);
                const jsonResponse = jQuery.parseJSON(response);

                if(jsonResponse.status == 404){
                    alert(jsonResponse.message);
                }else if(jsonResponse.status == 500){
                    alert(jsonResponse.message);
                }else if(jsonResponse.status == 200){
                    $("#viewroll").val(jsonResponse.data.roll);
                    $("#viewfname").val(jsonResponse.data.fname);
                    $("#viewlname").val(jsonResponse.data.lname);
                    $("#viewcity").val(jsonResponse.data.city);
                    $("#viewemail").val(jsonResponse.data.email);
                    $("#viewphone").val(jsonResponse.data.phone);
                    $("#viewgender").val(jsonResponse.data.gender);

                    $("#viewStudentModal").modal("show");
                }
            }
        });
    });

    // get Data for edit
    $(document).on("click", "#editbtn", function(event){
        //alert($(this).val());
        const roll = $(this).val();

        $.ajax({
            type: "GET",
            url : "studentapi.php?roll="+roll,
            success : function(response){
                //console.log(response);
                const jsonResponse = jQuery.parseJSON(response);

                if(jsonResponse.status == 404){
                    alert(jsonResponse.message);
                }else if(jsonResponse.status == 500){
                    alert(jsonResponse.message);
                }else if(jsonResponse.status == 200){
                    $("#editroll").val(jsonResponse.data.roll);
                    $("#editfname").val(jsonResponse.data.fname);
                    $("#editlname").val(jsonResponse.data.lname);
                    $("#editcity").val(jsonResponse.data.city);
                    $("#editemail").val(jsonResponse.data.email);
                    $("#editphone").val(jsonResponse.data.phone);
                    $("#editgender").val(jsonResponse.data.gender);

                    $("#editStudentModal").modal("show");
                }
            }
        });
    });

    // Code for Delete Data
    $(document).on("click", "#deletebtn", function(event){
        const roll = $(this).val();
        if(confirm("Are you sure to delete this data of Roll Number : "+roll)){
            $.ajax({
                type: "POST",
                url: "studentapi.php",
                data :{
                    "delete_process": true,
                    "roll": roll
                }, 
                success : function(response){
                    const jsonResponse = jQuery.parseJSON(response);
                    if(jsonResponse.status == 404){
                        alert(jsonResponse.message);
                    }else if(jsonResponse.status == 200){
                        alertify.set('notifier','position', 'top-right');
                        alertify.success(jsonResponse.message);
                        $("#myStudents").load(location.href+" #myStudents");
                    }
                }
            });
        }
    });
</script>