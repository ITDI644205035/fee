<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "shop";
// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
$id= $_GET['id'];
$sql = "SELECT * FROM users WHERE user_id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//echo $row['username'];
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
</head>
<body>
    <form action="updateuser.php" method="post" enctype="multipart/form-data">
        แก้ไขข้อมูล        <br>
        username : <input type="text" name="username" value="<?php echo $row['username'];?>">
        <br>
        password : <input type="password" name="password" value="<?php echo $row['password'];?>">
        <br>
        ชื่อสกุล : <input type="text" name="fullname" value="<?php echo $row['fullname'];?>">
        <br>
        <input type="hidden" name="userid" value="<?php echo $_GET['id'];?>">
        <input type="submit" value="บันทึก">
    </form>
</body>
</html>