<?php 
session_start();
include('conn.php');

if(isset($_POST['caterupdate']))
{
	 $studentstocater = (int) $_POST['studentstocater'];
	$id = $_POST['caterid'];

	$query = "UPDATE cater SET caterbooked = $studentstocater WHERE caterid = $id";
	$query_run = mysqli_query($con,$query);
	if($query_run)
	{
		$_SESSION['studentstocater']=$studentstocater;
	}
	else
	{	
		echo ("<SCRIPT>window.location.href='dashboard.php';</SCRIPT>");
	}

}
?>