<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "shop";
// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //!isset($_GET['username']);
        $uname = $_GET['username'];
        $pass = $_GET['password'];
        $fullname = $_GET['fullname'];
        $sql = $conn->prepare("INSERT INTO users (username, password, fullname) VALUES (?, ?, ?)");
        $sql->bind_param("sss", $uname, $pass, $fullname);
        
        $sql->execute();
    ?>
    <?php
        $getallusers = "SELECT * FROM users";
        //echo $getallusers;
        $allusers = mysqli_query($conn, $getallusers);
        while($row = mysqli_fetch_assoc($allusers)) {
            echo $row['user_id'];
            echo "   ".$row['username'];
            echo "<br>";
        }
    ?>



    <?php
        mysqli_close($conn);
    ?>
</body>
</html>