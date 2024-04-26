<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- 
        PHP File Upload
        With PHP, it is easy to upload files to the server.
        However, with ease comes danger, so always be careful when allowing file uploads!
        Configure The "php.ini" File : First, ensure that PHP is configured to allow file uploads. In your "php.ini" file, search for the file_uploads directive, and set it to On: file_uploads = On

        Create The HTML Form
        Next, create an HTML form that allow users to choose the image file they want to upload:
    -->
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <label for="file1">Select Any file for Upload : </label>
        <input type="file" name="file1" id="file1" required>
        <input type="submit" value="Upload File" name="uploadProcess">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php
    if(isset($_POST["uploadProcess"])){
        $file1 = $_FILES["file1"];

        print_r($file1);
    }
?>