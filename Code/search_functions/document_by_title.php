<h1>Seach By Document Name</h1>
<?php
session_start();
$reader_id = $_SESSION['reader_id'];
$required_doc = $_GET["input_document_title"];

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
echo $required_doc;

$sql = "SELECT * FROM DOCUMENT WHERE TITLE LIKE '%{$required_doc}%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "DOCID: " . $row["DOCID"]. "<br>TITLE: " . $row["TITLE"]."<br>PDATE: " . $row["PDATE"]. "<br>PUBLISHERID: " . $row["PUBLISHERID"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
