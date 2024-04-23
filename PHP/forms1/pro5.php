<?php
    $name = $gender = $website = $email = $comment = "";
    $errname = $errgender = $errwebsite = $erremail = $errcomment = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty($_POST["name"])){
            $errname = "Name is Required";
        }else{
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $errname = "Only letters and white space allowed";
            }
        }

        if(empty($_POST["email"])){
            $erremail = "Email is Required";
        }else{
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erremail = "Invalid email format";
            }
        }

        if(empty($_POST["website"])){
            $errwebsite = "Website is Required";
        }else{
            $website = test_input($_POST["website"]);
            if (!filter_var($website, FILTER_VALIDATE_URL)) {
                $errwebsite = "Invalid Website URL";
            }
        }
        
        if(empty($_POST["comment"])){
            $errcomment = "Comment is Required";
        }else{
            $comment = test_input($_POST["comment"]);    
        }

        if(empty($_POST["gender"])){
            $errgender = "Gender is Required";
        }else{
            $gender = test_input($_POST["gender"]);    
        }
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    echo "Welcome $name your email is $email selected gender is $gender and website is $website with $comment";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        Enter Name : <input type="text" name="name"> <span class="error">* <?php echo $errname; ?></span><br>
        Enter Email : <input type="text" name="email"> <span class="error">* <?php echo $erremail; ?></span><br>
        Enter Website : <input type="text" name="website"> <span class="error">* <?php echo $errwebsite; ?></span><br>
        Enter Comment : <input type="text" name="comment"> <span class="error">* <?php echo $errcomment ?></span><br>
        Select Gender : <input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female">Female  <span class="error">* <?php echo $errgender; ?></span><br>
        <input type="submit" value="Send Data">
        <input type="reset" value="Reset">
    </form>
</body>
</html>