<!DOCTYPE html>
<html>
<body>
<?php
session_start();

$_SESSION['reader_id'] = $_GET["reader_id"];
$reader_id = $_GET["reader_id"];

$servername = "localhost";
$username = "root";
$password = "LetMeIn2019Please";
$dbname = "CS_631";
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
        #echo $row["READERID"];
        if ($row["READERID"] == $reader_id){
          echo "You have entered valid use name and password";
          echo "<br><b>Welcome ".$row["RNAME"]."!</b>";
        }

    }
} else {
  echo "Wrong Reader ID";
  exit();
}
?>


<H2>Search Documents</H2>
<form action="reader_search_functions/document_by_id.php" method="get">
By Document ID (Example: D124): <input type="text" name="input_document_id">
<input type="submit">
</form>
<br>

<form action="reader_search_functions/document_by_title.php" method="get">
By Document Title (Example: Overwatch): <input type="text" name="input_document_title">
<input type="submit">
</form>
<br>

<form action="reader_search_functions/document_by_publisher_name.php" method="get">
By Publisher Name (Example: PublishersRUs): <input type="text" name="input_document_pub_name">
<input type="submit">
</form>



<br><a href="/index.php">Go Home</a>
</body>
</html>
