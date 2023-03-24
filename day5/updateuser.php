<?php
    include("connect.php")
?>

<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $id = $_POST['userid'];
    $sql = $conn->prepare("UPDATE users SET username = ?, password = ?, fullname = ? WHERE user_id = ?");
    $sql->bind_param("sssi", $username, $password, $fullname, $id);
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
    <a href="users.php">กลับ</a>
</body>
</html>