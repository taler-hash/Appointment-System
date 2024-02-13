<?php
session_start();
include('conn.php');

if(isset($_POST['declinebtn']))
{
	$decdate = date('m/d/Y');
	$decdatetodelete = date('m/d/Y', strtotime($decdate. ' + 30 days'));;
	$refnum =(int)$_POST['penregrefnum'];
	$stat2 = $_POST['statdecline'];
	$reason = $_POST['declinereason'];

	$query = "UPDATE appointment SET declinedatetodelete = '$decdatetodelete' ,declinedate = '$decdate', decreason = '$reason' , statid = $stat2  WHERE refnum = $refnum";
	$query_run = mysqli_query($con,$query);
	if($query_run)
	{
		$_SESSION['statusdeclined']=$refnum;
		echo"good";
	}
	else
	{	
		echo ("<SCRIPT>window.location.href='penreg.php';</SCRIPT>");
	}

}
?>