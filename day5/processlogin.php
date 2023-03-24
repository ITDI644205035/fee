<?php
    session_start();
    include("connect.php");
?>
<?php
    $username = "'".$_POST['username']."'";
    $password = "'".$_POST['password']."'";
    
    $sql = "SELECT * FROM users WHERE username LIKE $username AND password LIKE $password";

    $result = $conn->query($sql);
    echo "<br>";
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "สวัสดี";
        echo $row['fullname'];
        $_SESSION['name'] = $row['fullname'];
    } else {
        echo "username หรือ รหัสผ่านผิด";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="users.php">ไปหน้า users</a>
</body>
</html>