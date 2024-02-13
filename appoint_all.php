<?php
require "Session.php";
?>
<!DOCTYPE html>
<html lang="en"><head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<script>
</script>
</head>




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
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Appointments</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item active">TOR</a>
                            <a href="#" class="dropdown-item">Grades</a>
                            <a href="#" class="dropdown-item">Registration</a>
                            <a href="#" class="dropdown-item">Enrollment</a>
                            <a href="#" class="dropdown-item">Change/Add Subject</a>
                    </div>
                    </div
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Status</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Done</a>
                            <a href="#" class="dropdown-item">Pending</a>
                        </div>
                    </div>
                        <a href="#" class="nav-item nav-link">Schedule</a>
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
        <div class = "overflow-scroll">
        <div class="card shadow-lg " style = "height:585px">
            <h5 class="card-header bg-primary text-center text-light">All Appointments</h5>
            <select id="selection" class="form-select form-select-lg fw-bold" aria-label=".form-select-sm example" >
                              <option value="BSIT" class = "fw-bold">BSIT</option>
                              <option value="BSED" class = "fw-bold" >BSED</option>
                              <option value="BEED" class = "fw-bold" >BEED</option>
                              <option value="BSHRM" class = "fw-bold" >BSHRM</option>
                              <option value="BSHM" class = "fw-bold">BSHM</option>
                              <option value="BA-POLSCI" class = "fw-bold">Ba-Polsci</option>
</select>

                    
            <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
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