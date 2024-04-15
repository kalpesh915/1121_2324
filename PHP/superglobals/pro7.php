<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <thead>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                foreach($_SERVER as $key => $value){
                    echo "<tr>
                        <td>$key</td>
                        <td>$value</td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>