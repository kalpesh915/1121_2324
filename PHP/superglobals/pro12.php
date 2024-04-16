<!-- 
    PHP Superglobal - $_GET

    $_GET contains an array of variables received via the HTTP GET method. There are two main ways to send variables via the HTTP GET method: Query strings in the URL, HTML Forms

    Query string in the URL : A query string is data added at the end of a URL. In the link below, everything after the ? sign is part of the query string:
    
    <a href="data.php?subject=PHP&fname=Ansh&lname=Amrutiya&city=Rajkot">Test $GET</a>
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="data3.php" method="get">
        <label>Enter First Name :</label>
        <input type="text" name="fname" id="fn" required><br>
        <label>Enter Last Name :</label>
        <input type="text" name="lname" id="ln" required><br>
        <label>Enter Email Address :</label>
        <input type="email" name="email" id="em" required><br>
        <input type="submit" value="Send Data">
        <input type="reset" value="Reset">
    </form>

    <!-- 
        Think SECURITY when processing PHP forms! 
        The example above does not contain any form validation, it just shows how you can send and retrieve form data. Learn more about processing PHP forms with security in mind in the Form Validation chapter. Proper validation of form data is important to protect your form from hackers and spammers!
 -->
</body>
</html>