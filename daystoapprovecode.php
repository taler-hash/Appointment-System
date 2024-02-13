<?php 
session_start();
include('conn.php');

if(isset($_POST['updateapprove']))
{
	 $approvedays = (int) $_POST['daystoapprove'];
	$id = $_POST['approveid'];

	$query = "UPDATE approve SET approvedays = $approvedays WHERE approveid = $id";
	$query_run = mysqli_query($con,$query);
	if($query_run)
	{
		$_SESSION['approvedays']=$approvedays;
	}
	else
	{	
		echo ("<SCRIPT>window.location.href='dashboard.php';</SCRIPT>");
	}

}
?>