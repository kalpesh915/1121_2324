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
            PHP localeconv() Function
            Find the United States locale numeric formatting information:
        */

        setlocale(LC_ALL,"UK");
        $locale_info = localeconv();
        print_r($locale_info);
    ?>
</body>
</html>