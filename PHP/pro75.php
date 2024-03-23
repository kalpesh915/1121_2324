<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*  
            PHP htmlspecialchars_decode() Function
        */

        $str = "This is some &lt;b&gt;bold&lt;/b&gt; &lt;i&gt;text.&lt;/i&gt;";
        echo htmlspecialchars_decode($str);
    ?>
</body>
</html>