<?php 

include('conn.php');


$query = "SELECT approvedays FROM approve ";
$approveresult ="";
$result = $con->query($query);

     if ($result->num_rows > 0) {
          while($row24 = $result->fetch_assoc()) {

            
            $approveresult = $row24["approvedays"];
          }
          
            
      }

?>
<?php
session_start();
include('conn.php');

if(isset($_POST['approvebtn']))
{


	$date=$_POST['penregdate'];
    $_POST['numberofdays'] = $approveresult;

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
	 $refnum = (int) $_POST['penregrefnum'];
	$stat1 = $_POST['statapprove'];
    $datedone = date('m/d/Y');
    $datedonetodelete = date('m/d/Y', strtotime($datedone. ' + 30 days'));;
	$query = "UPDATE appointment SET statid = $stat1  , approvedate = '$nd', datedonetodelete = '$datedonetodelete'  WHERE refnum = $refnum";
	$query_run = mysqli_query($con,$query);
	if($query_run)
	{
		$_SESSION['statusapproved']=$refnum;
	}
	else
	{	
		
	}

}
?>