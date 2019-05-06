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

echo "<br><b>Fines Owed: $</b>";

$sql_fines_borrowed = "SELECT * FROM BORROWS WHERE READERID = '$reader_id'";
$result = $conn->query($sql_fines_borrowed);
$fine = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $today_date = date("Y/m/d");
      $due_by = date('Y-m-d', strtotime($row['BDTIME']. ' + 7 days'));

      if ($today_date < $due_by){
        $fine += $fine + 10;
      }
      else {
        $fine = 0;
      }

    }
    echo $fine;
} else {
    echo "0 results";
}


echo "<br><br><b>Documents Currently Borrowed By Reader: </b>";
$sql_list_of_borrowed_books = "SELECT * FROM BORROWS WHERE READERID = '$reader_id'";
$result = $conn->query($sql_list_of_borrowed_books);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<br>DOCID: " . $row["DOCID"] . " Current Status: Borrowed";

    }
} else {
    echo "0 results";
}

$conn->close();
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

<br>



<br><a href="/index.php">Quit</a>
</body>
</html>
