<?php
$user ="root";
$password = "";
$server = "localhost";
$db_name = "zedarHisab";
$conn = mysqli_connect($server,$user,$password,$db_name);
if(!$conn){
    die("Connection failed" . mysqli_connect_error());
}
// echo "connection succesful "

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tonoy Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="text">Hello world</div>
</body>
</html>