<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมขายของ</title>
</head>
<body>
    <form action="processlogin.php" method="post">
        username : <input type="text" name="username">
        <br>
        password : <input type="password" name="password">
        <br>
        <input type="submit" value="login">
        <br>
        <a href="regis.php">สมัครสมาชิก</a>
    </form>
</body>
</html>