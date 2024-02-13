<?php
session_start();
require_once('conn.php');
     if(isset($_POST['disabledatebtn']))
{
$date = $_POST['calendardisable'];
$desc = $_POST['descdisable'];
$add_qry="insert into  datedisable( datedisable , Description )values('$date' , '$desc')";
if ($con->query($add_qry) === TRUE)
{ 
  
  $_SESSION['disableses']=$date;

}
else
{echo "Error: " . $add_qry . "<br>" . $con->error;}
unset($_GET['submit']);
$con->close();
}
 

 
?>