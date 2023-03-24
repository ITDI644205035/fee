<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "shop";
// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
</head>
<body>
    <form action="processRegis.php" method="get">
        username : <input type="text" name="username">
        <br>
        password : <input type="password" name="password">
        <br>
        ชื่อสกุล : <input type="text" name="fullname">
        <br>
        <input type="checkbox" name="agree" value="yes">
        ยอมรับเงื่อนไข
        <br>
        <input type="submit" value="สมัคร">
    </form>
</body>
</html>