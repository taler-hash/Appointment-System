<?php
include('conn.php');

// sql to delete a record
$decdate = date('m/d/Y');
$sql = "DELETE FROM appointment WHERE declinedatetodelete < '$decdate' OR datedonetodelete < '$decdate' ";

if ($con->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$con->close();

?>