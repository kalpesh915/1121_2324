<!-- 
    Think SECURITY when processing PHP forms! 
    The example above does not contain any form validation, it just shows how you can send and retrieve form data. Learn more about processing PHP forms with security in mind in the Form Validation chapter. Proper validation of form data is important to protect your form from hackers and spammers!
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="data4.php" method="post">
        <label>Enter Email Address :</label>
        <input type="email" name="email" id="em" required><br>
        <label>Enter Password :</label>
        <input type="password" name="upass" id="up" required><br>
        <input type="submit" value="Send Data">
        <input type="reset" value="Reset">
    </form>

    <!-- 
        PHP $_POST
        $_POST contains an array of variables received via the HTTP POST method.
        There are two main ways to send variables via the HTTP Post method: 
        HTML forms : JavaScript HTTP requests   
        $_POST in HTML Forms A HTML form submits information via the HTTP POST method if the form's method attribute is set to "POST".
     -->
</body>
</html>