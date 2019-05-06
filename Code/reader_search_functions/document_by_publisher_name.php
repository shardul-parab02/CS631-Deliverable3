<h1>Seach By Publisher</h1>
<?php
session_start();
$reader_id = $_SESSION['reader_id'];
$required_doc = $_GET["input_document_pub_name"];

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

$sql_check_reader_id = "SELECT * FROM READER WHERE READERID = '".$reader_id."'";
$result_login = $conn->query($sql_check_reader_id);

if ($result_login->num_rows > 0) {
    // output data of each row
    while($row = $result_login->fetch_assoc()) {
        #echo "PUBLISHERID: " . $row["PUBLISHERID"];
        if ($row["READERID"] == $reader_id){
          echo "You have entered valid use name and password";
        }

    }
} else {
  echo "Wrong Reader ID";
  exit();
}



echo "<br>";

$sql_get_pub_id = "SELECT * FROM PUBLISHER WHERE PUBNAME = '".$required_doc."'";
$result_pub_id = $conn->query($sql_get_pub_id);
$pub_id = 0;

if ($result_pub_id->num_rows > 0) {
    // output data of each row
    while($row = $result_pub_id->fetch_assoc()) {
        #echo "PUBLISHERID: " . $row["PUBLISHERID"];
        $pub_id = $row["PUBLISHERID"];
    }
} else {
    echo "0 results";
}

$sql = "SELECT * FROM DOCUMENT WHERE PUBLISHERID = '".$pub_id."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>DOCID: " . $row["DOCID"]. "<br>TITLE: " . $row["TITLE"]."<br>PDATE: " . $row["PDATE"]. "<br>PUBLISHERID: " . $row["PUBLISHERID"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
