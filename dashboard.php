<?php
require "Session.php";
?>
<title>Dashboard</title>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="fontstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet"
    href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.jqueryui.min.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.jqueryui.min.js"></script>
    <style>
/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url(Preloader_7.gif) center no-repeat #fff ;
}
</style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<script>
  window.onload = function() {
      $("#reg1").hide();
      $("#reg2").hide();
  };
</script>

<script>
 var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
 var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>

<script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
  })
</script>
<script>

    $(document).ready(function() {
        $('#Alldata').DataTable( {
           "scrollX": true,

       });

    });
</script>
<script>

    $(document).ready(function() {
        $('#Alldata1').DataTable( {
           "scrollX": true,

       });

    });
</script>

<script>

    $(document).ready(function() {
       var Done = new String("Done");
       var Pending = new String("Pending");
       var year1 = new String("");
       $('#selection').change(function() {

        if( $('#selection').val() == Done) {

            $("#reg").fadeOut(1);
            $("#reg1").fadeIn(1);
            $("#reg2").fadeOut(1);

        }
        else if( $('#selection').val() == "Approved") {

            $("#reg").fadeOut(1);
            $("#reg1").fadeOut(1);
            $("#reg2").fadeIn(1);

        }
        else
        {
            $("#reg").fadeIn(1);
            $("#reg1").fadeOut(1);
            $("#reg2").fadeOut(1);
        }


    });
   });
</script>

<style>

</style>
<!--Date Cater-->
<?php 

include('conn.php');


$query = "SELECT caterbooked FROM cater ";
$dateresult ="";
$result = $con->query($query);

if ($result->num_rows > 0) {
  while($row24 = $result->fetch_assoc()) {


    $dateresult = $row24["caterbooked"];
}


}

?>
<!-- 2nd Part-->

<?php
include('conn.php');
$query = "SELECT * FROM appointment WHERE statid = '3' AND appoint_type = 'Registration'";
$query_run = mysqli_query($con, $query);
$row7 = mysqli_num_rows($query_run);

?>
<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '3' AND appoint_type = 'Grades'";
$query_run = mysqli_query($con, $query);
$row8 = mysqli_num_rows($query_run);
?>
<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '3' AND appoint_type = 'TOR'";
$query_run = mysqli_query($con, $query);
$row9 = mysqli_num_rows($query_run);
?>
<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '3' AND appoint_type = 'Change/Add Subject'";
$query_run = mysqli_query($con, $query);
$row10 = mysqli_num_rows($query_run);
?>

<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '3' AND appoint_type = 'Enrollment'";
$query_run = mysqli_query($con, $query);
$row12 = mysqli_num_rows($query_run);
?>

<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '3' AND appoint_type = 'Diploma'";
$query_run = mysqli_query($con, $query);
$row18 = mysqli_num_rows($query_run);
?>
<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '3' AND appoint_type = 'Certificate of Transfer Credentials'";
$query_run = mysqli_query($con, $query);
$row19 = mysqli_num_rows($query_run);
?>
<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '3' AND appoint_type = 'Certificate of Good Moral Character'";
$query_run = mysqli_query($con, $query);
$row20 = mysqli_num_rows($query_run);
?>
<?php
include('conn.php');

$query = "SELECT appoint_type FROM appointment WHERE statid = '3' AND appoint_type like '%Cert of%';";
$query_run = mysqli_query($con, $query);
$row21 = mysqli_num_rows($query_run);
?>
<?php
include('conn.php');

$query = "SELECT appoint_type FROM appointment WHERE statid = '3' AND appoint_type like '%Certificate True Copy%';";
$query_run = mysqli_query($con, $query);
$row22 = mysqli_num_rows($query_run);
?>
<?php
include('conn.php');

$query = "SELECT appoint_type FROM appointment WHERE statid = '3' AND appoint_type like '%Others:%';";
$query_run = mysqli_query($con, $query);
$row23 = mysqli_num_rows($query_run);
?>

<!-- 3rd Part-->

<?php
include('conn.php');
$query = "SELECT * FROM appointment WHERE statid = '2' AND appoint_type = 'Registration'";
$query_run = mysqli_query($con, $query);
$row25 = mysqli_num_rows($query_run);

?>
<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '2' AND appoint_type = 'Grades'";
$query_run = mysqli_query($con, $query);
$row26 = mysqli_num_rows($query_run);
?>
<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '2' AND appoint_type = 'TOR'";
$query_run = mysqli_query($con, $query);
$row27 = mysqli_num_rows($query_run);
?>
<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '2' AND appoint_type = 'Change/Add Subject'";
$query_run = mysqli_query($con, $query);
$row28 = mysqli_num_rows($query_run);
?>

<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '2' AND appoint_type = 'Enrollment'";
$query_run = mysqli_query($con, $query);
$row29 = mysqli_num_rows($query_run);
?>

<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '2' AND appoint_type = 'Diploma'";
$query_run = mysqli_query($con, $query);
$row30 = mysqli_num_rows($query_run);
?>
<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '2' AND appoint_type = 'Certificate of Transfer Credentials'";
$query_run = mysqli_query($con, $query);
$row31 = mysqli_num_rows($query_run);
?>
<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '2' AND appoint_type = 'Certificate of Good Moral Character'";
$query_run = mysqli_query($con, $query);
$row32 = mysqli_num_rows($query_run);
?>
<?php
include('conn.php');

$query = "SELECT appoint_type FROM appointment WHERE statid = '2' AND appoint_type like '%Cert of%';";
$query_run = mysqli_query($con, $query);
$row33 = mysqli_num_rows($query_run);
?>
<?php
include('conn.php');

$query = "SELECT appoint_type FROM appointment WHERE statid = '2' AND appoint_type like '%Certificate True Copy%';";
$query_run = mysqli_query($con, $query);
$row34 = mysqli_num_rows($query_run);
?>
<?php
include('conn.php');

$query = "SELECT appoint_type FROM appointment WHERE statid = '2' AND appoint_type like '%Others:%';";
$query_run = mysqli_query($con, $query);
$row35 = mysqli_num_rows($query_run);
?>


<!--Date Cater-->
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
  <script>
        setTimeout(function(){
            $('#se-pre-con').fadeToggle();
        }, 1500);
    </script>
<div id = "se-pre-con" class="se-pre-con"></div>
<body class = " bg-light ms-auto bg-opacity-0 ">
    <nav class="navbar navbar-expand-lg navbar-dark shadow justify-content-center "style = " background-color:#072e00;">
        <div class="container-fluid justify-content-center text-center">
            <img src="ccc.png" width="60" height="60" class="img-fluid me-auto" >
            <h5 style="font-size:2vw;" class = "text-white mx-auto fw-bold ">CCC Online Appointment Dashboard</h5>
            <div class="navbar-nav ms-auto px-2 text-light ">
                <a href="Logout.php?logout" class=" nav-item nav-link ">
                    <div class = "col-2 fs-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                          <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                      </svg>
                  </div>
              </a>
          </div>
      </div>
  </nav>



  <div class="container-fluid  ">
    <div class="row d-flex   ">
      <div class="col-sm-4 pt-2 ">
        <div class="card shadow-sm  " >
          <h5 class="card-header text-light text-center " style="background-color:#072e00 ;">Info</h5>
          <div class="card-body ">
            <div class = "border rounded p-0 m-0">
             <div class = "row mt-0 m-1 bg-primary rounded-3 mx-0 pt-1">
    <div class = "col-7 bg-primary justify-content-between">
        <h5 class="card-title text-light bg-primary rounded fw-bold p-2">Full Booked Dates</h5>
    </div>
    <div class = "col-5 pb-1 pe-1 d-flex justify-content-end ">
     <button type="button" class=" fw-bold btn btn-success rounded-3" data-bs-toggle="modal" data-bs-target="#CaterModal"> To cater : <?php echo $dateresult ?></button>
 </div>
</div>
         <!-- Cater -->
         <script>
            function successcater() {
               if(document.getElementById("studentstocater").value==="") { 
                document.getElementById('caterupdate').disabled = true; 
            } else { 
                document.getElementById('caterupdate').disabled = false;
            }
        }
    </script>
    <script>

        $(document).on('click','#caterupdate', function(){
            $.ajax({
                url:"studentstocater.php",
                type:"post",
                data:$("#CaterModal").serialize(),
                success:function(data){
                    location.reload();


                }


            });

        });

    </script>

    <script type="text/javascript">

        $(document).ready(function () {

            window.setTimeout(function() {
                $("#toasttocater").fadeTo(100, 0).slideUp(100, function(){
                    $(this).remove(); 
                });
            }, 5000);

        });
    </script>
    <div id="toasttocater" class="position-fixed bottom-0 end-0 p-3" style="z-index: 11; width:350px">
      <div id="liveToast" class="toastcaterdone hide fade bg-success shadow-sm rounded" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <strong class="me-auto">Update Done</strong>
          <small>Just Now</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>

      <div class="toast-body text-white fw-bold justify-content-center text-center h6">
          <strong><h6>Students: <?php echo $_SESSION['studentstocater']?></h6></strong>
      </div>
  </div>
</div>

<?php
if(isset($_SESSION['studentstocater']))
{
    ?>
    <script>
       $(document).ready(function(){
           $('.toastcaterdone').toast('show');

       });

   </script>

   <?php

   unset($_SESSION['studentstocater']);
}
else{

}
?>

</script>
<div class="modal fade" id="CaterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h6 class="modal-title" id="staticBackdropLabel">How Many Students to Cater</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="studentstocater.php" method="POST">
            <input hidden type="text" name = "caterid" id="caterinput"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" value="1" readonly>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Students</span>
            </div>
            <input id="studentstocater" onkeyup="successcater()" name = "studentstocater" type="number" class="form-control fw-bold" aria-label="Default" value="<?php echo $dateresult ?>" aria-describedby="inputGroup-sizing-default">
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" id="caterupdate" name="caterupdate"  class="btn btn-primary">Update</button>
    </div>
</form>
</div>
</div>
</div>

<!-- Approve Days -->

<script>
    function successapprove() {
       if(document.getElementById("daystoapprove").value==="") { 
        document.getElementById('updateapprove').disabled = true; 
    } else { 
        document.getElementById('updateapprove').disabled = false;
    }
}
</script>
<script>

    $(document).on('click','#updateapprove', function(){
        $.ajax({
            url:"daystoapprovecode.php",
            type:"post",
            data:$("#ApproveDaysModal").serialize(),
            success:function(data){
                location.reload();
                

            }
            

        });

    });

</script>

<script type="text/javascript">

    $(document).ready(function () {

        window.setTimeout(function() {
            $("#toastapprove").fadeTo(100, 0).slideUp(100, function(){
                $(this).remove(); 
            });
        }, 5000);

    });
</script>
<div id="toastapprove" class="position-fixed bottom-0 end-0 p-3" style="z-index: 11; width:350px">
  <div id="liveToast" class="toastapprovedone hide fade bg-success shadow-lg rounded" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <strong class="me-auto">Update Done</strong>
      <small>Just Now</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>

  <div class="toast-body text-white fw-bold justify-content-center text-center h6">
      <strong><h6>Days: <?php echo $_SESSION['approvedays']?></h6></strong>
  </div>
</div>
</div>

<?php
if(isset($_SESSION['approvedays']))
{
    ?>
    <script>
       $(document).ready(function(){
           $('.toastapprovedone').toast('show');

       });

   </script>

   <?php

   unset($_SESSION['approvedays']);
}
else{

}
?>

</script>

<div class="modal fade" id="ApproveDaysModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h6 class="modal-title" id="staticBackdropLabel">How Many Days to Approve</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="daystoapprovecode.php" method="POST">
         <div class="input-group mb-3">
          <div class="input-group-prepend">
            <input hidden type="text" name = "approveid" id="approveid"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" value="1" readonly>
            <span class="input-group-text" id="inputGroup-sizing-default">Days</span>
        </div>
        <input type="number" onkeyup="successapprove()" id="daystoapprove" name="daystoapprove" class="form-control fw-bold" aria-label="Default" value="<?php echo $approveresult ?>" aria-describedby="inputGroup-sizing-default">
    </div>
</div>
<div class="modal-footer">
    <button id="updateapprove" name="updateapprove" type="submit" class="btn btn-primary">Update</button>
</div>
</form>
</div>
</div>
</div>

    <div class = "overflow-auto shadow-sm" style="height: 150px;">
        <div class="overflow-vertical" style="height: 150px;"><?php
        include ('conn.php');
        $result = "SELECT caterbooked from cater where caterid = '1'";
        $query = mysqli_query($con,$result);
        $row100 = mysqli_fetch_array($query);
        $sched = $row100['caterbooked'];
        $query = "SELECT caterbooked,appoint_date,COUNT(appoint_date) from appointment,cater group by appoint_date ORDER BY COUNT(appoint_date) ASC";
        $result = $con->query($query);
        ?>
        

        <table id ="data" class="table table-striped mx-1 liveautodate">
          <thead>
            <tr>
              <th scope="col"  style = "width: 50px">Dates</th>
          </tr>
      </thead>
      <tbody>
        <?php

        if ($result->num_rows > 0) {
          // output data of each row
          while($row101 = $result->fetch_assoc()) {

            if($row101["COUNT(appoint_date)"] == $sched)
            {
               echo "<tr>";
               echo "<td>"; echo $row101["appoint_date"]; echo "</td>";

           }

       }

   }
   ?>
</tbody>
</table>
</div>
</div>
</div>

<!--Date Disable -->
<!-- Date function -->
<script>

    $(document).ready(function(){

        var disabledDates = [<?php 
            include ('conn.php');

            $query = "SELECT caterbooked,appoint_date,COUNT(appoint_date) from appointment,cater group by appoint_date ORDER BY COUNT(appoint_date) ASC";

            $result = $con->query($query);
            $cater = ["caterbooked"];

            if ($result->num_rows > 0) {
          // output data of each row
              while($row200 = $result->fetch_assoc()) {

                if($row200["COUNT(appoint_date)"] == $sched)
                {
                   echo $date1 = "'".$row200["appoint_date"]."'".",";

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
          while($row200 = $result->fetch_assoc()) {

            echo "'".$row200["datedisable"]."'".",";

        }


    }
    ?>];
    function unavailable(date){

        var day = date.getDay();
        var string = jQuery.datepicker.formatDate('mm/dd/yy', date);
        return [ day != 0 && day != 6 && disabledDates.indexOf(string) == -1   ];
        

    }
    $('#calendar').datepicker({
        minDate:+   1, 

        beforeShowDay: unavailable 
    });


});
</script>

<script>

    $(document).on('click','#disabledatebtn', function(){
        $.ajax({
            url:"adddatetodisable.php",
            type:"post",
            data:$("#DisableDateModal").serialize(),
            success:function(data){
                location.reload();
                

            }
            

        });

    });

</script>

<script>
    function successdisable() {
       if(document.getElementById("calendar").value==="" || document.getElementById("descdisable").value==="") { 
        document.getElementById('disabledatebtn').disabled = true; 
    } else { 
        document.getElementById('disabledatebtn').disabled = false;
    }
}
</script>

<script type="text/javascript">

    $(document).ready(function () {

        window.setTimeout(function() {
            $("#toastdisable").fadeTo(100, 0).slideUp(100, function(){
                $(this).remove(); 
            });
        }, 5000);


    });
</script>
<div id="toastdisable" class="position-fixed bottom-0 end-0 p-3" style="z-index: 11; width:350px">
  <div id="liveToast" class="toastdisabledone hide fade bg-success shadow-sm rounded" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <strong class="me-auto">Disabled Done</strong>
      <small>Just Now</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>

  <div class="toast-body text-white fw-bold justify-content-center text-center h6">
      <strong><h6>New Disabled Date Inserted : <?php echo $_SESSION['disableses']?></h6></strong>
  </div>
</div>
</div>

<?php
if(isset($_SESSION['disableses']))
{
    ?>
    <script>
       $(document).ready(function(){
           $('.toastdisabledone').toast('show');

       });

   </script>

   <?php

   unset($_SESSION['disableses']);
}
else{

}
?>

<!-- Disable Date -->
<div class="modal fade" id="DisableDateModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="staticBackdropLabel">Add Date to Disable</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="adddatetodisable.php" method="POST">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" >Date</span>
            </div>
            <input id="calendar" type="text" autocomplete="off" name="calendardisable" />    
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
        </div>
        <input type="text" name="descdisable" onkeyup="successdisable()" id="descdisable" class="form-control"  aria-label="Default" aria-describedby="inputGroup-sizing-default">
    </div>
</div>
<div class="modal-footer">
    <button type="submit" id="disabledatebtn" name="disabledatebtn" class="btn btn-primary" disabled="disabled">Insert</button>
</div>
</form>
</div>
</div>
</div>
<div  class = "border rounded mt-2">
<div class = "row mt-0 m-1 bg-primary rounded-3 mx-0 pt-1">
    <div class = "col-6 bg-primary justify-content-between">
        <h5 class="card-title text-light bg-primary rounded fw-bold p-2">Disabled Dates</h5>
    </div>
    <div class = "col-6 pb-1 pe-1 d-flex justify-content-end ">
     <button type="button" class=" fw-bold btn btn-success rounded-3" data-bs-toggle="modal" data-bs-target="#DisableDateModal">Add Date</button>
 </div>
</div>
<div class = "overflow-auto shadow-sm" style="height: 150px;">
    <div class="overflow-vertical" style="height: 150px;">
        <table id ="" class="table table-striped  mx-1  ">

          <thead>
            <tr>
              <th scope="col"  style = "width: 50px">Dates</th>
              <th scope="col"style = "width: 400px">Description</th>

          </tr>
      </thead>
      <tbody>




        <?php
        include ("conn.php");
        $query = "SELECT * FROM datedisable";
        $search_result = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($search_result))
        {
            echo "<tr>";
            echo "<td>"; echo $row["datedisable"]; echo "</td>";
            echo "<td>"; echo $row["Description"]; echo "</td>";


            echo "</tr>";
        }
        ?>
        <script>
            $(document).ready(function() {
             str = $('#pengradeprupose').text();
             if($.trim(str) === "") {
             }
         });
     </script>






 </tbody>
</table>
</div>
</div>
</div>




</div>

</div>
</div>

<div class="col-sm-4 pt-2 ">
 <div class="card shadow-sm mb-2 center ">
  <h5 class="card-header text-center  text-light" style="background-color:#072e00 ;">Search by Referrence Number</h5>
  <div class="card-body text-center justify-content-center">


    <div class="formpost">
        <input class="form-control col-lg-8 mb-2" id= "id" name = "id" type="number" placeholder="Search" aria-label="Search">
        <button class="btn btn-success my-2 my-sm-0 searchdone" id="searchdone"  type="submit"  >Search</button>
    </div>
    <script>

        $(document).ready(function (){
            $('#searchdone').click(function (e){
                e.preventDefault();

                var id = $('#id').val();
                $.ajax({
                    type: "POST",
                    url: "fetchdata.php",
                    data: {
                        "search_post_btn": 1,
                        "id": id,
                    },
                    dataType: "text",
                    success: function(response){
                        $("#modaldoneshow").html(response);
                        $("#DoneModal").modal('show');
                    }

                });
            });

        });

    </script>

    <script type="text/javascript">

        $(document).ready(function () {

            window.setTimeout(function() {
                $("#toastdone").fadeTo(100, 0).slideUp(100, function(){
                    $(this).remove(); 
                });
            }, 5000);

        });
    </script>
    <div id="toastdone" class="position-fixed bottom-0 end-0 p-3" style="z-index: 11; width:350px">
      <div id="liveToast" class="toastdone hide fade bg-success shadow-sm rounded" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <strong class="me-auto">Done</strong>
          <small>Just Now</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>

      <div class="toast-body text-white fw-bold justify-content-center text-center h6">
          <strong><h6>REF #<?php echo $_SESSION['statusdone']?></h6></strong>
      </div>
  </div>
</div>

<?php
if(isset($_SESSION['statusdone']))
{
    ?>
    <script>
       $(document).ready(function(){
           $('.toastdone').toast('show');

       });

   </script>

   <?php

   unset($_SESSION['statusdone']);
}
else{

}
?>

<div class="modal fade " id="DoneModal" data-bs-backdrop="static" data-bs-keyboard="false" >

  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content ">
      <div class="modal-header bg-success">
        <h5 class="modal-title text-white" id="exampleModalToggleLabel2">Accept</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>


    <div id="modaldoneshow">


    </div>




</div>
</div>
</div>

<div class="modal fade " id="AboutModal" data-bs-backdrop="static" data-bs-keyboard="false" >

  <div class="modal-dialog modal-dialog-centered modal-xl ">
    <div class="modal-content ">
      <div class="modal-header bg-success"style = "background-image: linear-gradient(to right, red , yellow);">
        <h5 class="modal-title text-white" id="exampleModalToggleLabel2" >System Maker</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body ">
        <div class = "row text-center justify-content-center ">
            <div class="card  shadow-sm rounded-3 mx-1 mt-1" style="width: 18rem;">
              <img src="Pedrogas.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Jurie Tylier Pedrogas</h5>
                <p class="card-text">   Programmer</p>
            </div>
        </div> 
        <div class="card shadow-sm rounded-3 mx-1 mt-1" style="width: 18rem;">
          <img src="estilliori.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Jushyne Ray Estilliore</h5>
            <p class="card-text">sss</p>
        </div>
    </div> 
    <div class="card shadow-sm rounded-3 mx-1 mt-1" style="width: 18rem;">
      <img src="prato.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Bea Claire Prato</h5>
        <p class="card-text">Project Manager</p>
    </div>
</div>
<div class="card shadow-sm rounded-3 mx-1 mt-1" style="width: 18rem;">
  <img src="romero.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Jinky Romero</h5>
    <p class="card-text">asd</p>
</div>
</div>
<div class="card shadow-sm rounded-3 mx-1 mt-1" style="width: 18rem;">
  <img src="dofredo.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Ezra Mae Dofredo</h5>
    <p class="card-text">Database Designer</p>
</div>
</div>
<div class="card shadow-sm rounded-3 mx-1 mt-1" style="width: 18rem;">
  <img src="baricuatro.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Mary Jean Baricuatro</h5>
    <p class="card-text">Database Designer</p>
</div>
</div>
</div>
</div>

</div>
</div>
</div>

</div>
</div>
<script>
    $(document).ready(function()
    {
        setInterval(function(){
            $("#statuses").load("allstatusdata.php");

            refresh();

        },1000);
    });
    
</script>
<script>
    $(document).ready(function()
    {
        setInterval(function(){
            $("#autodelete").load("autodeletecode.php");

            refresh();

        },1000);
    });
    
</script>
<div hidden id = "autodelete"></div>
<script>
    $(document).ready(function()
    {
        setInterval(function(){
            $("#autodeletedatedisable").load("autodeletedisablecode.php");

            refresh();

        },1000);
    });
    
</script>
<div hidden id = "autodeletedatedisable"></div>  
<script>
    $(document).ready(function()
    {
        setInterval(function(){
           var runnableScript = exec('C:/xampp/htdocs/Appointment/autodelete/autodeletescript.bat',
    (error, stdout, stderr) => {
        console.log(stdout);
        console.log(stderr);
        if (error !== null) {
            console.log(`exec error: ${error}`);
        }
    });
            refresh();

        },1000);
    });
    
</script>

<div class="card shadow-sm">
    <div id = "statuses">

</div>

</div>

</div>
<script>
$(document).ready(function() {
    $('#Alldata3').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer(".sample")).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );
</script>
<script>
$(document).ready(function() {
    $('#Alldata5').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer(".sample")).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );
</script>

<div class="modal fade" id="AllApprovedModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl ">
    <div class="modal-content ">
      <div class="modal-header bg-primary text-white">
        <h4 class="modal-title" id="staticBackdropLabel">All Approved Data</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body overflow-auto">
            <?php

    $query1 = "SELECT * FROM appointment WHERE statid = 2";
    $search_result1 = mysqli_query($con,$query1);
  ?>
        

       

            <table id ="Alldata5" cellspacing="5" cellpadding="5"    class=" display table table-striped border shadow-lg ">

  <thead>
    <tr>
       <th scope="col">Referrence #</th>
      <th scope="col">Appointment Type</th>
      <th scope="col">Appointment Date</th>
      <th scope="col">Student ID</th>
      <th scope="col">Course</th>
      <th scope="col">Year</th>
      <th scope="col">Status</th>
      <th scope="col">Purpose</th>
      <th scope="col" >Name</th>
    </tr>
  </thead>
  <tbody>
    <?php

while($row = mysqli_fetch_array($search_result1))
{
    echo "<tr>";
       echo "<td>"; echo $row["refnum"]; echo "</td>";
        echo "<td>"; echo $row["appoint_type"]; echo "</td>";
        echo "<td >"; echo $row["appoint_date"]; echo "</td>";
        echo "<td >"; echo $row["student_id"]; echo "</td>";
        echo "<td >"; echo $row["course"]; echo "</td>";
        echo "<td >"; echo $row["year"]; echo "</td>";
        echo "<td><strong><div class = 'bg-primary rounded text-center text-white p-2'>"; echo "Approved"; echo "</div></strong</td>";
        echo "<td style = 'width: 400px;'>"; echo $row["purpose"]; echo "</td>";
        echo "<td style = 'width: 400px;'>"; echo $row["name"]; echo "</td>";
        echo "</tr>";
        }
?>
  </tbody>
  <tfoot id="sample">
       <tr>
       <th scope="col" style=" visibility: hidden;"  >asda</th>
      <th scope="col" >Appointment Type</th>
      <th scope="col">Appointment Date</th>
      <th scope="col" style=" visibility: hidden;" >Student ID</th>
      <th scope="col">Course</th>
      <th scope="col">Year</th>
      <th scope="col" style=" visibility: hidden;" >Status</th>
      <th scope="col" style=" visibility: hidden;" >  </th>
      <th scope="col" >Name</th>
    </tr>
</tfoot>
</table>
    </div>
</div>
</div>
</div>
<!--- All Done Modal --->
<div class="modal fade" id="AllDoneModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl ">
    <div class="modal-content ">
      <div class="modal-header bg-success text-white">
        <h4 class="modal-title m-2 fw-bold" id="staticBackdropLabel">HISTORY</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body overflow-auto">
            <?php

    $query1 = "SELECT * FROM appointment WHERE statid = 3";
    $search_result1 = mysqli_query($con,$query1);
  ?>
        

       

            <table id ="Alldata3" cellspacing="5" cellpadding="5"    class=" display table table-striped border shadow-lg ">

  <thead>
    <tr>
       <th scope="col">Referrence #</th>
      <th scope="col">Appointment Type</th>
      <th scope="col">Appointment Date</th>
      <th scope="col">Appointment Done</th>
      <th scope="col">Student ID</th>
      <th scope="col">Course</th>
      <th scope="col">Year</th>
      <th scope="col">Status</th>
      <th scope="col">Purpose</th>
      <th scope="col" >Name</th>
    </tr>
  </thead>
  <tbody>
    <?php

while($row = mysqli_fetch_array($search_result1))
{
    echo "<tr>";
       echo "<td>"; echo $row["refnum"]; echo "</td>";
        echo "<td>"; echo $row["appoint_type"]; echo "</td>";
        echo "<td >"; echo $row["appoint_date"]; echo "</td>";
         echo "<td >"; echo $row["datedone"]; echo "</td>";
        echo "<td >"; echo $row["student_id"]; echo "</td>";
        echo "<td >"; echo $row["course"]; echo "</td>";
        echo "<td >"; echo $row["year"]; echo "</td>";
        echo "<td><strong><div class = 'bg-success rounded text-center text-white p-2'>"; echo "Done"; echo "</div></strong</td>";
        echo "<td style = 'width: 400px;'>"; echo $row["purpose"]; echo "</td>";
        echo "<td style = 'width: 400px;'>"; echo $row["name"]; echo "</td>";
        echo "</tr>";
        }
?>
  </tbody>
  <tfoot id="sample">
       <tr>
       <th scope="col" style=" visibility: hidden;"  >asda</th>
      <th scope="col" >Appointment Type</th>
      <th scope="col">Appointment Date</th>
      <th scope="col">Appointment Done</th>
      <th scope="col" style=" visibility: hidden;" >Student ID</th>
      <th scope="col">Course</th>
      <th scope="col">Year</th>
      <th scope="col" style=" visibility: hidden;" >Status</th>
      <th scope="col" style=" visibility: hidden;" >  </th>
      <th scope="col" >Name</th>
    </tr>
</tfoot>
</table>
    </div>
</div>
</div>
</div>
<div class="col-sm-4 pt-2">
    <div class="card shadow-sm ">

      <h5 class="card-header text-center  text-light" style="background-color:#072e00 ;">Appointments </h5>


      <div class = "mx-3 mt-2 ">
          <select id="selection" class="form-select form-select-lg fw-bold" aria-label=".form-select-sm example" >
              <option value="Pending" class = "fw-bold">Pending</option>
              <option value="Approved" class = "fw-bold">Approved</option>
              <option value="Done" class = "fw-bold">Done</option>
          </select>
      </div>

<script>
    $(document).ready(function()
    {
        setInterval(function(){
            $("#reg").load("datapending.php");
            refresh();
        },1000);
    });
    
</script>

    <div id="reg">
        

    </div>

    <!-- 2nd Part -->

    <div id="reg1">


            <div class="card-body text-light bg-success my-1 mx-3 shadow-sm rounded">
                <div class ="row">
                    <div class = "col-12">
                        <p class = " h6  m-0">Grades:  <small class="text-white bg-warning p-1 fw-bold rounded"><?php echo$row8?></small>
                        </div>
                    </div>  
                </div>


                <div class="card-body text-light bg-success my-1 mx-3 shadow-sm rounded">
                    <div class ="row">
                        <div class = "col-12">
                            <p class = " h6  m-0">TOR:  <small class="text-white bg-warning p-1 fw-bold rounded"><?php echo$row9?></small>
                            </div>
                        </div>  
                    </div>

                    <div class="card-body text-light bg-success my-1 mx-3 shadow-sm rounded ">
                        <div class ="row">
                            <div class = "col-12">
                               <p class = " h6  m-0">Changing or Adding Subject:  <small class="text-white bg-warning p-1 fw-bold rounded"><?php echo$row10?></small></p>
                           </div>
                       </div>  
                   </div>
                   <div class="card-body text-light bg-success my-1 mx-3 shadow-sm rounded ">
                    <div class ="row">
                        <div class = "col-12">
                           <p class = " h6  m-0">Enrollment:  <small class="text-white bg-warning p-1 fw-bold rounded"><?php echo$row12?></small></p>
                       </div>
                   </div>  
               </div>

               <div class="card-body text-light bg-success my-1 mx-3 shadow-sm rounded ">
                <div class ="row">

                    <div class = "col-12">
                        <p class = " h6  m-0">Diploma:  <small class="text-white bg-warning p-1 fw-bold rounded"><?php echo$row18?></small></p>
                    </div>
                </div> 
            </div> 

            <div class="card-body text-light bg-success my-1 mx-3 shadow-sm rounded ">
                <div class ="row">

                    <div class = "col-12">
                        <p class = " h6  m-0">Certificate of Transfer Credentials:  <small class="text-white bg-warning p-1 fw-bold rounded"><?php echo$row19?></small></p>
                    </div>
                </div> 
            </div>
            <div class="card-body text-light bg-success my-1 mx-3 shadow-sm rounded ">
                <div class ="row">

                    <div class = "col-12">
                        <p class = " h6  m-0">Certificate of Good Moral Character:  <small class="text-white bg-warning p-1 fw-bold rounded"><?php echo$row20?></small></p>
                    </div>
                </div> 
            </div>  

            <div class="card-body text-light bg-success my-1 mx-3 shadow-sm rounded ">
                <div class ="row">

                    <div class = "col-12">
                        <p class = " h6  m-0">Certificate of (Specify):  <small class="text-white bg-warning p-1 fw-bold rounded"><?php echo$row21?></small></p>
                    </div>
                </div> 
            </div> 

            <div class="card-body text-light bg-success my-1 mx-3 shadow-sm rounded ">
                <div class ="row">

                    <div class = "col-12">
                        <p class = " h6  m-0">Certificate True Copy (Specify):  <small class="text-white bg-warning p-1 fw-bold rounded"><?php echo$row22?></small></p>
                    </div>
                </div> 
            </div> 

            <div class="card-body text-light bg-success my-1 mx-3 shadow-sm rounded ">
                <div class ="row">

                    <div class = "col-12">
                        <p class = " h6  m-0">Others:  <small class="text-white bg-warning p-1 fw-bold rounded"><?php echo$row23?></small></p>
                    </div>
                </div> 
            </div> 

        </div>

        <!-- 3rd Part -->

        <div id="reg2">


                <div class="card-body text-light bg-primary my-1 mx-3 shadow-sm rounded">
                    <div class ="row">
                        <div class = "col-12">
                            <p class = " h6  m-0">Grades:  <small class="text-white bg-warning p-1 fw-bold rounded"><?php echo$row26?></small>
                            </div>
                        </div>  
                    </div>


                    <div class="card-body text-light bg-primary my-1 mx-3 shadow-sm rounded">
                        <div class ="row">
                            <div class = "col-12">
                                <p class = " h6  m-0">TOR:  <small class="text-white bg-warning p-1 fw-bold rounded"><?php echo$row27?></small>
                                </div>
                            </div>  
                        </div>

                        <div class="card-body text-light bg-primary my-1 mx-3 shadow-sm rounded ">
                            <div class ="row">
                                <div class = "col-12">
                                   <p class = " h6  m-0">Changing or Adding Subject:  <small class="text-white bg-warning p-1 fw-bold rounded"><?php echo$row28?></small></p>
                               </div>
                           </div>  
                       </div>
                       <div class="card-body text-light bg-primary my-1 mx-3 shadow-sm rounded ">
                        <div class ="row">
                            <div class = "col-12">
                               <p class = " h6  m-0">Enrollment:  <small class="text-white bg-warning p-1 fw-bold rounded"><?php echo$row29?></small></p>
                           </div>
                       </div>  
                   </div>

                   <div class="card-body text-light bg-primary my-1 mx-3 shadow-sm rounded ">
                    <div class ="row">

                        <div class = "col-12">
                            <p class = " h6  m-0">Diploma:  <small class="text-white bg-warning p-1 fw-bold rounded"><?php echo$row30?></small></p>
                        </div>
                    </div> 
                </div> 

                <div class="card-body text-light bg-primary my-1 mx-3 shadow-sm rounded ">
                    <div class ="row">

                        <div class = "col-12">
                            <p class = " h6  m-0">Certificate of Transfer Credentials:  <small class="text-white bg-warning p-1 fw-bold rounded"><?php echo$row31?></small></p>
                        </div>
                    </div> 
                </div>
                <div class="card-body text-light bg-primary my-1 mx-3 shadow-sm rounded ">
                    <div class ="row">

                        <div class = "col-12">
                            <p class = " h6  m-0">Certificate of Good Moral Character:  <small class="text-white bg-warning p-1 fw-bold rounded"><?php echo$row32?></small></p>
                        </div>
                    </div> 
                </div>  

                <div class="card-body text-light bg-primary my-1 mx-3 shadow-sm rounded ">
                    <div class ="row">

                        <div class = "col-12">
                            <p class = " h6  m-0">Certificate of (Specify):  <small class="text-white bg-warning p-1 fw-bold rounded"><?php echo$row33?></small></p>
                        </div>
                    </div> 
                </div> 

                <div class="card-body text-light bg-primary my-1 mx-3 shadow-sm rounded ">
                    <div class ="row">

                        <div class = "col-12">
                            <p class = " h6  m-0">Certificate True Copy (Specify):  <small class="text-white bg-warning p-1 fw-bold rounded"><?php echo$row34?></small></p>
                        </div>
                    </div> 
                </div> 

                <div class="card-body text-light bg-primary my-1 mx-3 shadow-sm rounded ">
                    <div class ="row">

                        <div class = "col-12">
                            <p class = " h6  m-0">Others:  <small class="text-white bg-warning p-1 fw-bold rounded"><?php echo$row35?></small></p>
                        </div>
                    </div> 
                </div> 

            </div>

        </div>
    </div>

</div>

</div>

</div>
<script>
    $(document).ready(function (){
        $('.approvebtn').on('click', function(){
         $tr = $(this).closest('tr');

         var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();

         console.log(data);

         $('#penregrefnum').val(data[0]); 
         $('#penregappointtype').val(data[1]);
         $('#penregdate').val(data[2]);
         $('#penregstatus').val(data[3]);
         $('#penregname').val(data[4]);





     })




    })
</script>

<!-- Footer -->


<footer class="footer navbar-fixed-bottom  mt-5 w-100" data-toggle= "tooltip"style="background-color:#072e00 ;">

  <!-- Copyright -->
  <div data-bs-target='#AboutModal' data-bs-toggle='modal' class="footer-copyright text-light text-center py-3" >© 2021 Copyright: TR Software Service
  </div>
</footer>
</div>

</body>
</html>