<?php
    include("connect.php");
?>
<?php
$id=$_GET['id'];

$sql = $conn->prepare("DELETE FROM users WHERE user_id = ?");
$sql->bind_param("i", $id);
$sql->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    ลบข้อมูลเรียบร้อย
    <br>
    <a href="users.php">กลับ</a>
</body>
</html>