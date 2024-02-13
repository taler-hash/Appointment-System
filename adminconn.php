<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbadmin";

//creating connection
$con = new mysqli($servername, $username, $password, $dbname);
//checking connection status  
if($con->connect_error)
{
die("Connection Failure:".$conn->connect_error);
return false;
}
?>