<?php
require "Session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet"
     href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href='css/fullcalendar.min.css' rel='stylesheet'/>
<link href='css/fullcalendar.print.css' rel='stylesheet' media='print'/>
<script src='js/moment.min.js'></script>
<script src='js/jquery-ui.custom.min.js'></script>
<script src='js/fullcalendar.min.js'></script>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<style>
    body{
  background: lightgrey;
}
.card1{
  width: 100%;
  height: 305px;
  margin: 30px auto;
}
.scrollable{
  overflow-y: auto;
  max-height: 300px;
}
</style>
     <script>
    $("#calendar1").fullCalendar({

            editable:true,
               header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
               },
               events: [
                   {
                     title: 'All Day Event',
                     start: '2019-11-01',

                   },
                   {
                     title: 'Long Event',
                     start: '2019-11-07',
                     end: '2019-11-10'
                   },
                   {
                     groupId: '999',
                     title: 'Repeating Event',
                     start: '2019-11-09T16:00:00'
                   },
                   {
                     groupId: '999',
                     title: 'Repeating Event',
                     start: '2019-11-16T16:00:00'
                   },
                   {
                     title: 'Conference',
                     start: '2019-11-11',
                     end: '2019-11-13'
                   },
                   {
                     title: 'Meeting',
                     start: '2019-11-12T10:30:00',
                     end: '2019-11-12T12:30:00'
                   },
                   {
                     title: 'Lunch',
                     start: '2019-11-12T12:00:00'
                   },
                   {
                     title: 'Meeting',
                     start: '2019-11-12T14:30:00'
                   },
                   {
                     title: 'Birthday Party',
                     start: '2019-11-13T07:00:00'
                   },
                   {
                     title: 'Click for Google',
                     url: 'http://google.com/',
                     start: '2019-11-28'
                   }
                 ]
        });
     </script>
<body class = "bg-danger ms-auto">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow ">
            <div class="container-fluid">
                <img src="ccc.png" width="80" height="80" class="img-fluid" >
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="dashboard.php" class="nav-item nav-link ">Dashboard</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Appointments</a>
                            <div class="dropdown-menu">
                            <a href="TOR.php" class="dropdown-item ">TOR</a>
                            <a href="#" class="dropdown-item">Grades</a>
                            <a href="#" class="dropdown-item">Registration</a>
                            <a href="#" class="dropdown-item">Enrollment</a>
                            <a href="#" class="dropdown-item">Change/Add Subject</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Status</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Done</a>
                                <a href="#" class="dropdown-item">Pending</a>
                            </div>
                        </div>
                            <a href="dates.php" class="nav-item nav-link active">Schedule</a>
                            <a href="#" class="nav-item nav-link">About</a>
                    </div>
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
            </div>
        </nav>



  <div class="container-fluid  ">
    <div class="row d-flex  h-100 ">
      <div class="col-sm-6 pt-2">
        <div class="card text-center shadow-lg">
  <h5 class="card-header bg-primary text-light ">Set Date to be Disable</h5>
  <div class="card-body m-0">
    
    <div class ="card1">
        <div class = "scrollable shadow-lg" style="height: 300px;">
    <div class="overflow-auto" style="height: 300px;"><?php
    include ("conn.php");
    $query = "SELECT * FROM datedisable";
    $search_result = mysqli_query($con,$query);
  ?>
        

            <table id ="Alldata" class="table table-striped table-dark mx-1 ">
  <thead>
    <tr>
      <th scope="col"  style = "width: 50px">Dates</th>
      <th scope="col"style = "width: 400px">Description</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php

while($row = mysqli_fetch_array($search_result))
{
    echo "<tr>";
        echo "<td>"; echo $row["datedisable"]; echo "</td>";
        echo "<td>"; echo $row["Description"]; echo "</td>";
        
        
        echo "</tr>";
        }
?>
  </tbody>
</table>
</div>
</div>
    </div>
  </div>
</div>
</div>





      <div class="col-sm-6 pt-2">
        <div class="card text-center shadow-lg">
  <h5 class="card-header bg-primary text-light ">Info</h5>
  <div class="card-body">
    <h5 class="card-title">Announcement</h5>
    <div class ="card1">
        <div class = "scrollable">
    <div id='calendar1'></div></div>
</div>
    </div>
  </div>
</div>
</div>




</div>

</div>

</div>


<!-- Footer -->
<footer class="footer navbar-fixed-bottom bg-success mt-5 w-100">

  <!-- Copyright -->
  <div class="footer-copyright text-light text-center py-3">© 2021 Copyright: TR Software Service
  </div>
</footer>
</div>

</body>
</html>