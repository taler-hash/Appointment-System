<?php
session_start();
include('conn.php');

if(isset($_POST['declinebtn']))
{

	 $refnum =$_POST['pengraderefnum'];
	$stat2 = $_POST['statdecline'];
	$reason = $_POST['declinereason'];

	$query = "UPDATE appointment SET decreason = '$reason' , statid = $stat2  WHERE refnum = $refnum";
	$query_run = mysqli_query($con,$query);
	if($query_run)
	{
		$_SESSION['statusdeclined']="dasdas";
		echo ("<SCRIPT>window.location.href='penreg.php';</SCRIPT>");
	}
	else
	{	
		echo ("<SCRIPT>window.location.href='penreg.php';</SCRIPT>");
	}

}
?>