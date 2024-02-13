<?php
session_start();
include('conn.php');
if(isset($_POST['approvebtn']))
{

	$date=$_POST['penregdate'];
    $_POST['numberofdays'] = 1;

    $d = new DateTime( $date );
    $t = $d->getTimestamp();

    // loop for X days
    for($i=0; $i<$_POST['numberofdays']; $i++){

        // add 1 day to timestamp
        $addDay = 86400;

        // get what day it is next day
        $nextDay = date('w', ($t+$addDay));

        // if it's Saturday or Sunday get $i-1
        if($nextDay == 0 || $nextDay == 6) {
            $i--;
        }

        // modify timestamp, add 1 day
        $t = $t+$addDay;
    }
   $d->setTimestamp($t);
  
	
	$nd = $d->format( 'm/d/Y' );
	 $refnum = (int) $_POST['pengraderefnum'];
	$stat1 = $_POST['statapprove'];

	$query = "UPDATE appointment SET statid = $stat1  , approvedate = '$nd'  WHERE refnum = $refnum";
	$query_run = mysqli_query($con,$query);
	if($query_run)
	{
		$_SESSION['statusapproved']="dasdas";
		echo ("<SCRIPT>window.location.href='penreg.php';</SCRIPT>");
	}
	else
	{	
		echo ("<SCRIPT>window.location.href='penreg.php';</SCRIPT>");
	}

}

?>