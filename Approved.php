<?php
require "Session.php";
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en"><head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.jqueryui.min.css"/>
  
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.jqueryui.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<script>    
</script>
</head>
<script>

$(document).ready(function() {
    $('#Alldata').DataTable( {
         "scrollX": true,
         
});

});
</script>

<script>
     $("#checkall").click(function () {
     $('input:checkbox').not(this).prop('checked', this.checked);
 });
</script>
<body class="bg-danger ">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow ">
        <div class="container-fluid">
            <a href="dashboard.php">
            <img src="ccc.png" width="80" height="80" class="img-fluid"></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="dashboard.php" class="nav-item nav-link">Dashboard</a>
                    <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Appointments</a>
                            <div class="dropdown-menu">
                            <a href="TOR.php" class="dropdown-item">TOR</a>
                            <a href="#" class="dropdown-item">Grades</a>
                            <a href="#" class="dropdown-item">Registration</a>
                            <a href="#" class="dropdown-item">Enrollment</a>
                            <a href="#" class="dropdown-item">Change/Add Subject</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Status</a>
                            <div class="dropdown-menu">
                                <a href="Done.php" class="dropdown-item">Done</a>
                                <a href="Approved.php" class="dropdown-item active">Approved</a>
                                <a href="Pending.php" class="dropdown-item ">Pending</a>
                            </div>
                        </div>
                        <a href="dates.php" class="nav-item nav-link">Schedule</a>
                        <a href="#" class="nav-item nav-link">About</a>
                </div>
                <div class="navbar-nav ms-auto px-2 text-light ">
                    <a href="Logout.php?logout" class=" nav-item nav-link ">
                    <div class="col-2 fs-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"></path>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"></path>
</svg>
        </div>
</a>
                </div>
            </div>

        </div>
    </nav>
<div class=" container-fluid mt-3" >
        <div class="card shadow-lg " style = "width: auto;height:auto">

            
            <h5 class="card-header bg-primary text-center text-light">Appointments<small class = "bg-primary rounded p-1">(Approved)</small></h5>
            
            
              <?php

    $query = "SELECT * , status.stat FROM appointment,status WHERE appointment.statid = status.statid AND appointment.statid = 2 ";
    $search_result = mysqli_query($con,$query);
  ?>
        

            <table id ="Alldata" class="table table-striped table-dark mx-1 ">
  <thead>
    <tr>
      <th scope="col">Referrence #</th>
      <th scope="col">Appointment Type</th>
      <th scope="col">Appointment Date</th>
      <th scope="col">Student ID</th>
      <th scope="col">Status</th>
      <th scope="col">Course</th>
      <th scope="col" style = "width: 400px;">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Year</th>
    </tr>
  </thead>
  <tbody>
    <?php

while($row = mysqli_fetch_array($search_result))
{
    echo "<tr>";
        echo "<td>"; echo $row["refnum"]; echo "</td>";
        echo "<td>"; echo $row["appoint_type"]; echo "</td>";
        echo "<td>"; echo $row["appoint_date"]; echo "</td>";
        echo "<td>"; echo $row["student_id"]; echo "</td>";
        echo "<td>"; echo $row["stat"]; echo "</td>";
        echo "<td>"; echo $row["course"]; echo "</td>";
        echo "<td>"; echo $row["name"]; echo "</td>";
        echo "<td>"; echo $row["age"]; echo "</td>";
        echo "<td>"; echo $row["year"]; echo "</td>";
        
        echo "</tr>";
        }
?>
  </tbody>
</table>


</div>



</div>

<!-- Footer -->
<footer class="footer navbar-fixed-bottom bg-success mt-5 w-100">

  <!-- Copyright -->
  <div class="footer-copyright text-light text-center py-3">© 2021 Copyright: TR Software Service
  </div>
</footer>

</body>
</html>