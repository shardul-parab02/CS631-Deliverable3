<!DOCTYPE html>
<html>
<body>
<?php
session_start();

$_SESSION['reader_id'] = $_GET["reader_id"];
?>


<H2>Search Documents</H2>
<form action="search_functions/document_by_id.php" method="get">
By Document ID (Example: D124): <input type="text" name="input_document_id">
<input type="submit">
</form>
<br>

<form action="search_functions/document_by_title.php" method="get">
By Document Title (Example: Overwatch): <input type="text" name="input_document_title">
<input type="submit">
</form>
<br>

<form action="search_functions/document_by_publisher_name.php" method="get">
By Publisher Name (Example: D124): <input type="text" name="input_document_pub_name">
<input type="submit">
</form>



<br><a href="/index.php">Go Home</a>
</body>
</html>
