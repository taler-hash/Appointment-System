<?php
include('conn.php');
$query = "SELECT *  FROM appointment WHERE  statid = 1 AND appoint_type = 'Registration'";
$query_run = mysqli_query($con, $query);
$row1 = mysqli_num_rows($query_run);

?>
<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '1' AND appoint_type = 'Grades'";
$query_run = mysqli_query($con, $query);
$row2 = mysqli_num_rows($query_run);
?>
<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '1' AND appoint_type = 'TOR'";
$query_run = mysqli_query($con, $query);
$row3 = mysqli_num_rows($query_run);
?>
<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '1' AND appoint_type = 'Change/Add Subject'";
$query_run = mysqli_query($con, $query);
$row4 = mysqli_num_rows($query_run);
?>

<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '1' AND appoint_type = 'Enrollment'";
$query_run = mysqli_query($con, $query);
$row11 = mysqli_num_rows($query_run);
?>
<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '1' AND appoint_type = 'Diploma'";
$query_run = mysqli_query($con, $query);
$row123 = mysqli_num_rows($query_run);
?>
<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '1' AND appoint_type = 'Certificate of Transfer Credentials'";
$query_run = mysqli_query($con, $query);
$row13 = mysqli_num_rows($query_run);
?>
<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '1' AND appoint_type = 'Certificate of Good Moral Character'";
$query_run = mysqli_query($con, $query);
$row14 = mysqli_num_rows($query_run);
?>
<?php
include('conn.php');

$query = "SELECT appoint_type FROM appointment WHERE statid = '1' AND appoint_type like '%Cert of%';";
$query_run = mysqli_query($con, $query);
$row15 = mysqli_num_rows($query_run);

?>
<?php
include('conn.php');
$query = "SELECT appoint_type FROM appointment WHERE statid = '1' AND appoint_type like '%Certificate True Copy%';";
$query_run = mysqli_query($con, $query);
$row16 = mysqli_num_rows($query_run);

?>
<?php
include('conn.php');

$query = "SELECT appoint_type FROM appointment WHERE statid = '1' AND appoint_type like '%Others:%';";
$query_run = mysqli_query($con, $query);
$row17 = mysqli_num_rows($query_run);

?>





        <div  class="card-body text-light hover-shadow bg-warning my-1 mx-3 shadow-sm rounded penreg " onclick="location.href='Pengrade.php';" data-toggle= "tooltip" data-bs-placement="bottom" title="View Pending (Grades)"> 

            <p class = " link-light h6" >Grades: <small class="text-white bg-success p-1 fw-bold rounded"><?php echo$row2?></small></p>
        </div>



        <div class="card-body text-light hover-shadow bg-warning my-1 mx-3 shadow-sm rounded penreg " onclick="location.href='pentor.php';" data-toggle= "tooltip" data-bs-placement="bottom" title="View Pending (TOR)"> 

            <p class = " link-light h6" >TOR: <small class="text-white bg-success p-1 fw-bold rounded"><?php echo$row3?></small></p>
        </div> 

        <div class="card-body text-light hover-shadow bg-warning my-1 mx-3 shadow-sm rounded penreg " onclick="location.href='penchange.php';" data-toggle= "tooltip" data-bs-placement="bottom" title="View Pending (Change/Add Subject)"> 

            <p class = " link-light h6" >Change/Add Subject: <small class="text-white bg-success p-1 fw-bold rounded"><?php echo$row4?></small></p>
        </div> 

        <div class="card-body text-light hover-shadow bg-warning my-1 mx-3 shadow-sm rounded penreg " onclick="location.href='penenroll.php';" data-toggle= "tooltip" data-bs-placement="bottom" title="View Pending (Enrollment)"> 

            <p class = " link-light h6" >Enrollment: <small class="text-white bg-success p-1 fw-bold rounded"><?php echo$row11?></small></p>
        </div> 

        <div class="card-body text-light hover-shadow bg-warning my-1 mx-3 shadow-sm rounded penreg " onclick="location.href='pendiploma.php';" data-toggle= "tooltip" data-bs-placement="bottom" title="View Pending (Diploma)"> 

            <p class = " link-light h6" >Diploma: <small class="text-white bg-success p-1 fw-bold rounded"><?php echo$row123?></small></p>
        </div> 

        <div class="card-body text-light hover-shadow bg-warning my-1 mx-3 shadow-sm rounded penreg " onclick="location.href='pentransfer.php';" data-toggle= "tooltip" data-bs-placement="bottom" title="View Pending (Certificate of Transfer Credentials)"> 

            <p class = " link-light h6" >Certificate of Transfer Credentials: <small class="text-white bg-success p-1 fw-bold rounded"><?php echo$row13?></small></p>
        </div> 

        <div class="card-body text-light hover-shadow bg-warning my-1 mx-3 shadow-sm rounded penreg " onclick="location.href='pengood.php';" data-toggle= "tooltip" data-bs-placement="bottom" title="View Pending (Certificate of Good Moral Character)"> 

            <p class = " link-light h6" >Certificate of Good Moral Character: <small class="text-white bg-success p-1 fw-bold rounded"><?php echo$row14?></small></p>
        </div> 

        <div class="card-body text-light hover-shadow bg-warning my-1 mx-3 shadow-sm rounded penreg " onclick="location.href='pencertspe.php';" data-toggle= "tooltip" data-bs-placement="bottom" title="View Pending (Certificate of (Specify))"> 

            <p class = " link-light h6" >Certificate of (Specify): <small class="text-white bg-success p-1 fw-bold rounded"><?php echo$row15?></small></p>
        </div> 

        <div class="card-body text-light hover-shadow bg-warning my-1 mx-3 shadow-sm rounded penreg " onclick="location.href='pencerttrue.php';" data-toggle= "tooltip" data-bs-placement="bottom" title="View Pending (Certificate True Copy (Sets))"> 

            <p class = " link-light h6" >Certificate True Copy (Sets): <small class="text-white bg-success p-1 fw-bold rounded"><?php echo$row16?></small></p>
        </div> 


        <div class="card-body text-light hover-shadow bg-warning my-1 mb-3 mx-3 shadow-sm rounded penreg " onclick="location.href='penothers.php';" data-toggle= "tooltip" data-bs-placement="bottom" title="View Pending (Others)"> 

            <p class = " link-light h6" >Others: <small class="text-white bg-success p-1 fw-bold rounded"><?php echo$row17?></small></p>
        </div> 


