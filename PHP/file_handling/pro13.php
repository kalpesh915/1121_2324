<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="filename">Enter File Name : </label>
        <input type="text" name="filename" id="filename" required><br>
        <label for="data">Enter Data for File : </label>
        <textarea name="data" id="data" required></textarea><br>
        <label for="mode">Select Writing Mode : </label>
        <select name="mode" id="mode">
            <option value="w">write mode</option>
            <option value="a">append mode</option>
        </select><br>
        <hr>
        <input type="submit" value="Write Data" name="writeProcess">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php
    if(isset($_POST["writeProcess"])){
        $filename = $_POST["filename"];
        $data = $_POST["data"];
        $mode = $_POST["mode"];

        $file1 = fopen($filename, $mode) or die("Unable to Open File");
        fwrite($file1, $data);
        fclose($file1);

        echo "<hr>File Writing Completed<hr>";
    }
?>