<?php
require_once('conn.php');
require_once('Schedule.php');
     if(isset($_POST['submit']))
{
$appointment = $_POST['passapoint'];
$purpose = $_POST['passpurpose'];
$calendar = $_POST['passcalendar'];
$name = $_POST['passname'];
$studentid =$_POST['passstudid'];
$course =$_POST['passcourse'];
$year =$_POST['passyear'];
$status ='1';
$refnum =$_POST['passrefnum'];
$decdatetodelete = "1";
$datedonetodelete = "1";
$add_qry="insert into  appointment( appoint_type, purpose, appoint_date, student_id, course, name,year,statid,refnum,declinedatetodelete,datedonetodelete)values('$appointment','$purpose','$calendar','$studentid','$course','$name','$year','$status','$refnum','$decdatetodelete','$datedonetodelete')";
if ($con->query($add_qry) === TRUE)
{ 
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Success you will proceed to the tracking of the referrence number ')
    window.location.href='Livesearch.php';
    </SCRIPT>");
}
else
{echo "Error: " . $add_qry . "<br>" . $con->error;}
unset($_GET['submit']);
$con->close();
}
 

 
?>