<?php
include('conn.php');
// sql to delete a record
$decdate = date('m/d/Y');
$sql = "DELETE FROM datedisable WHERE datedisable < '$decdate' ";

if ($con->query($sql) === TRUE) {
} else {
  echo "Error deleting record: " . $conn->error;
}

$con->close();

?>