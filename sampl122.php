<?php
include ('conn.php');

$result = "SELECT caterbooked from cater where caterid = '1'";
$query = mysqli_query($con,$result);
$row1 = mysqli_fetch_array($query);
$sched = $row1['caterbooked'];
?>
<?php 
include ('conn.php');

$query = "SELECT caterbooked,appoint_date,COUNT(appoint_date) from appointment,cater group by appoint_date ORDER BY COUNT(appoint_date) ASC";

$result = $con->query($query);
  $cater = ["caterbooked"];

     if ($result->num_rows > 0) {
          // output data of each row
          while($row2 = $result->fetch_assoc()) {

            if($row2["COUNT(appoint_date)"] == $sched)
            {
                 echo $date1 = "'".$row2["appoint_date"]."'".",";
      
            }
          
          }
      
      }

       else {
          
      }
?><?php 
include ('conn.php');

$query = "SELECT datedisable FROM datedisable ";

$result = $con->query($query);

     if ($result->num_rows > 0) {
          while($row2 = $result->fetch_assoc()) {

            echo "'".$row2["datedisable"]."'".",";
          
          }
          
      
      }
?>