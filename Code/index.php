<!DOCTYPE html>
<html>
<body>


<?php
$servername = "localhost";
$username = "root";
$password = "LetMeIn2019Please";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "DB Connected successfully";
?>

<br><a href="/main_menu.php"><b>Main Menu</b> (Entry to application)</a>

<br><a href="/index.php">Go Home</a>


</body>
</html>
