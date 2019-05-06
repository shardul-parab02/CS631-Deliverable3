<h1>Check Out Document</h1>
<?php
session_start();
$reader_id = $_SESSION['reader_id'];
$required_doc = $_GET["DOCID"];

$servername = "localhost";
$username = "root";
$password = "LetMeIn2019Please";
$dbname = "CS_631";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


echo "<br>";
$BORNUMBER = $reader_id."_".$required_doc."_".date("Y-m-d");

$sql = "INSERT INTO `BORROWS`($BORNUMBER, $reader_id, $required_doc, "1")";

echo $sql;
$conn->close();
?>
