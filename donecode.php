<?php
session_start();
include('conn.php');
if(isset($_POST['donebtn']))
{
	$datedone = date('m/d/Y');
	$refnum = (int) $_POST['penregrefnum'];
	$stat1 = $_POST['doneapprove'];

	$query = "UPDATE appointment SET statid = $stat1, datedone = '$datedone'  WHERE refnum = $refnum";
	$query_run = mysqli_query($con,$query);
	if($query_run)
	{
		$_SESSION['statusdone']=$refnum;
	}
	else
	{	
		echo"Not Done";

}
}
?>