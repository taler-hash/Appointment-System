<!--Status-->
<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '1' ORDER BY appointid";
$query_run = mysqli_query($con, $query);
$row5 = mysqli_num_rows($query_run);
?>
<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '3' ORDER BY appointid";
$query_run = mysqli_query($con, $query);
$row6 = mysqli_num_rows($query_run);
?>
<?php
include('conn.php');

$query = "SELECT * FROM appointment WHERE statid = '2' ORDER BY appointid";
$query_run = mysqli_query($con, $query);
$row36 = mysqli_num_rows($query_run);
?>
<h5 class="card-header text-center  text-light" style="background-color:#072e00 ;">Status</h5>
  
  <div class="card-body text-light bg-success my-1 mx-3 shadow-sm rounded mt-3" data-bs-toggle="modal" data-bs-target="#AllDoneModal">
    <div class ="row">
        <div class = "col-2 pt-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
              <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
              <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
          </svg>
      </div>
      <div class = "col-8">
        <p class = "card-text  m-0 fw-bold">Done</p>
        <h4 class = "card-text m-0"><?php echo$row6?></h4>
    </div>
</div>  
</div>
<div class="card-body text-light bg-primary mx-3 shadow-sm rounded" data-bs-toggle="modal" data-bs-target="#AllApprovedModal">
    <div class ="row">
        <div class = "col-2 pt-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
              <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
          </svg>
      </div>
      <div class = "col-8">
        <p class = "card-text  m-0 fw-bold">Approved</p>
        <h4 class = "card-text m-0"><?php echo$row36?></h4>
    </div>
</div>  
</div>

<div class="card-body text-light bg-warning my-1 mx-3 shadow-sm rounded mb-3">
    <div class ="row">
        <div class = "col-2 pt-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
      </div>
      <div class = "col-8">
        <p class = "card-text  m-0 fw-bold">Pending</p>
        <h4 class = "card-text m-0"><?php echo$row5?></h4>
    </div>
</div>  
</div>