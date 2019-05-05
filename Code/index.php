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


echo "<br>This page displays 10 items from each database used in application and the navigation to other pages"


?>

<br><a href="/main_menu.php">Main Menu (Entry to application)</a>

<br><a href="/index.php">Go Home</a>


</body>
</html>
