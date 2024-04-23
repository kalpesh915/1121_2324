<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- 
        The PHP superglobals $_GET and $_POST are used to collect form-data.
        PHP - A Simple HTML Form
        The example below displays a simple HTML form with two input fields and a submit button:
    -->
</head>
<body>
    <form action="welcome.php" method="post">
        Enter First Name : <input type="text" name="fname"><br>
        Enter Last Name : <input type="text" name="lname"><br>
        <input type="submit" value="Send Data"> 
    </form>

    <!-- 
    when the user fills out the form above and clicks the submit button, the form data is sent for processing to a PHP file named "welcome.php". The form data is sent with the HTTP POST method.
     -->
</body>
</html>