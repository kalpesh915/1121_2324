<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="op"></h1>
    <hr>
    <button onclick="generateRequest()">Generate AJAX Post Request</button>    
</body>
</html>

<script>
    function generateRequest(){
        const xmlHttp = new XMLHttpRequest();
        xmlHttp.open("POST", "data5.php");
        xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlHttp.onload = function(){
            document.getElementById("op").innerHTML = xmlHttp.responseText;
        }
        xmlHttp.send("fname=meet&lname=Sinojiya");
    }
</script>