<?php
    $name = $gender = $website = $email = $comment = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        PHP Form Validation
        Think SECURITY when processing PHP forms!
        These pages will show how to process PHP forms with security in mind. Proper validation of form data is important to protect your form from hackers and spammers!
        The HTML form we will be working at in these chapters, contains various input fields: required and optional text fields, radio buttons, and a submit button:
    -->

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        Enter Name : <input type="text" name="name"> <br>
        Enter Email : <input type="text" name="email"> <br>
        Enter Website : <input type="text" name="website"> <br>
        Enter Comment : <input type="text" name="comment"> <br>
        Select Gender : <input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female">Female<br>
        <input type="submit" value="Send Data">
        <input type="reset" value="Reset">
    </form>

    <!-- 
        What is the $_SERVER["PHP_SELF"] variable? The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.
        So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page. This way, the user will get error messages on the same page as the form.
        What is the htmlspecialchars() function?
        The htmlspecialchars() function converts special characters into HTML entities. This means that it will replace HTML characters like < and > with &lt; and &gt;. This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.
        Warning!
        The $_SERVER["PHP_SELF"] variable can be used by hackers!
        If PHP_SELF is used in your page then a user can enter a slash / and then some Cross Site Scripting (XSS) commands to execute.
        Cross-site scripting (XSS) is a type of computer security vulnerability typically found in Web applications. XSS enables attackers to inject client-side script into Web pages viewed by other users. 
     -->
</body>
</html>