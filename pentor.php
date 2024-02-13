<?php
require "session.php";
include('conn.php');
?>
<!DOCTYPE html>
<title>Pending / TOR</title>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.jqueryui.min.css"/>
  
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.jqueryui.min.js"></script>

</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<script>

$(document).ready(function() {
    $('#Alldata1').DataTable( {
         "scrollX": true,
         
});

});
</script>

<script>
     $("#checkall").click(function () {
     $('input:checkbox').not(this).prop('checked', this.checked);
 });
</script>
<body class = "bg-warning text-dark bg-opacity-25">
  <header>
    
    <div class="navbar navbar-warning bg-warning shadow-sm">
      <div class="container d-flex justify-content-between mt-2">
      <h4 class = "text-white fw-bold"> Pending / TOR </h4>
    
    <button type="button" onclick="location.href='dashboard.php';" class="btn btn-warning text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
</svg></button>
      </div>
      </div>
  </header>
  <script>
    
    $(document).on('click','#declinebtn', function(){
        $.ajax({
            url:"declinecode.php",
            type:"post",
            data:$("#DeclinedModal").serialize(),
            success:function(data){
                location.reload();
                

            }
            

        });






    });
  </script>

<script>
    
    $(document).on('click','#doneapprove', function(){
        $.ajax({
            url:"approvecode.php",
            type:"post",
            data:$("#ApprovedModal").serialize(),
            success:function(data){
                location.reload();
                

            }
            

        });






    });
  </script>
  
<script>
    $(document).ready(function (){
        $('.declinebtn').on('click', function(){
           $tr = $(this).closest('tr');

           var data = $tr.children("td").map(function(){
                return $(this).text();
           }).get();

           console.log(data);

 

           $('#pengradedecrefnum').val(data[0]);
           $('#pengradedecapptype').val(data[1]); 
           $('#pengradedecappdate').val(data[2]);
           $('#pengradedecstudid').val(data[3]);
           $('#pengradedeccourse').val(data[4]);
           $('#pengradedecyear').val(data[5]); 
           $('#pengradedecstatus').val(data[6]);
           $('#pengradedecpurpose').val(data[7]);
           $('#pengradedecname').val(data[8]); 



        })




    })

</script>
<script>
    $(document).ready(function (){
        $('.approvebtn').on('click', function(){
           $tr = $(this).closest('tr');

           var data = $tr.children("td").map(function(){
                return $(this).text();
           }).get();

           console.log(data);

            
            $('#pengraderefnum').val(data[0]);
           $('#pengradeapptype').val(data[1]); 
           $('#pengradeappdate').val(data[2]);
           $('#pengradestudid').val(data[3]);
           $('#pengradecourse').val(data[4]);
           $('#pengradeyear').val(data[5]); 
           $('#pengradestatus').val(data[6]);
           $('#pengradepurpose').val(data[7]);
           $('#pengradename').val(data[8]);




        })




    })

</script>
<script type="text/javascript">

$(document).ready(function () {
 
window.setTimeout(function() {
    $("#toastapproved").fadeTo(100, 0).slideUp(100, function(){
        $(this).remove(); 
    });
}, 5000);
 
});
</script>

<script type="text/javascript">

$(document).ready(function () {
 
window.setTimeout(function() {
    $("#toastdeclined").fadeTo(100, 0).slideUp(100, function(){
        $(this).remove(); 
    });
}, 5000);
 
});
</script>

<div id="toastapproved" class="position-fixed bottom-0 end-0 p-3" style="z-index: 11; width:350px">
  <div  class="toastapproved hide fade bg-primary shadow-lg rounded" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <strong class="me-auto">Approved Done</strong>
      <small>Just Now</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>

    <div class="toast-body text-white fw-bold justify-content-center text-center h6">
      <strong><h6>REF #<?php echo $_SESSION['statusapproved']?></h6></strong>
    </div>
  </div>
</div>

<div id="toastdeclined" class="position-fixed bottom-0 end-0 p-3" style=" width:300px;">
  <div  class="toastdeclined hide fade bg-danger shadow-lg rounded" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <strong class="me-auto">Declined Done</strong>
      <small>Just Now</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>

    <div class="toast-body text-white fw-bold justify-content-center text-center h6">
      <strong><h6>REF #<?php echo $_SESSION['statusdeclined']?></h6></strong>
    </div>
  </div>
</div>

<div class = "container fluid mt-3 rounded">

<?php
  if(isset($_SESSION['statusapproved']))
  {
    ?>
      <script>
     $(document).ready(function(){
     $('.toastapproved').toast('show');

     });

</script>

    <?php
    
    unset($_SESSION['statusapproved']);
  }
  else{
    
  }
  ?>

  <?php
  if(isset($_SESSION['statusdeclined']))
  {
    ?>
      <script>
     $(document).ready(function(){
     $('.toastdeclined').toast('show');

     });

</script>

    <?php
    
    unset($_SESSION['statusdeclined']);
  }
  else{
    
  }
  ?>
  <script>
    $(document).ready(function(){
    $('#doneapprove').click(function(){
      var data = $(#)

    });
  });
  </script>


              <?php

    $query = "SELECT * FROM appointment WHERE statid = 1 AND appoint_type = 'TOR'";
    $search_result = mysqli_query($con,$query);
  ?>
        

       

            <table cellspacing="5" cellpadding="5"   id ="Alldata1" class="table table-striped table-dark mx-1 border shadow-lg ">

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
      <th scope="col" class = "bg-primary text-center nobr">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php

while($row = mysqli_fetch_array($search_result))
{
    echo "<tr>";
       echo "<td>"; echo $row["refnum"]; echo "</td>";
        echo "<td>"; echo $row["appoint_type"]; echo "</td>";
        echo "<td >"; echo $row["appoint_date"]; echo "</td>";
        echo "<td >"; echo $row["student_id"]; echo "</td>";
        echo "<td >"; echo $row["course"]; echo "</td>";
        echo "<td >"; echo $row["year"]; echo "</td>";
        echo "<td><strong><div class = 'bg-warning rounded text-center p-2'>"; echo "Pending"; echo "</div></strong</td>";
        echo "<td style = 'width: 400px;'>"; echo $row["purpose"]; echo "</td>";
        echo "<td style = 'width: 400px;'>"; echo $row["name"]; echo "</td>";
       echo "<td > <nobr><strong><button type='button' class='btn btn-primary approvebtn' data-bs-target='#ApprovedModal' data-bs-toggle='modal' data-bs-dismiss='modal'>Approve</button> <button type='button' id='declinedbtn' class=' .declinedbtn btn btn-danger declinebtn' data-bs-target='#DeclinedModal' data-bs-toggle='modal'>Decline</button></nobr></strong></td>";
        echo "</tr>";
        }
?>
  </tbody>
</table>
</div>
<!--- approve modal --->
<form action ="approvecode.php" method = "POST">
<div class="modal fade overflow-auto" id="ApprovedModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content ">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white" id="exampleModalToggleLabel2">Approval</h5>
        <button type="button" class="btn-close" data-bs-target='#ModalReg' data-bs-toggle='modal' data-bs-dismiss='modal'></button>
      </div>
      <div class="modal-body">
        <input hidden type="text" name = "statapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" value="2" readonly>
  <div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence #:</h6>

              <input type="text" name = "penregrefnum" id="pengraderefnum" class=" h5 shadow-sm p-2 col-12 rounded fw-bold" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" fs-6 shadow-sm p-2 col-12 fw-bold" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Date:</h6>
             

              <input type="text" name = "penregdate" id="pengradeappdate" class=" h5 shadow-sm p-2 fw-bold col-12" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" readonly>
            </div>
            </div>
            <div class ="row">
              <div class = "col-4">
              <h6 class="m-0 b-0" >Student Id:</h6>
             

              <input type="text" name = "pengradestudid" id="pengradestudid" class=" h5 shadow-sm p-2 col-12 fw-bold " aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Course</h6>
             
              <input type="text" name = "pengradecourse" id="pengradecourse" class=" h5 shadow-sm p-2 col-12 fw-bold" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Year</h6>
             
              <input type="text" name = "pengradeyear" id="pengradeyear" class=" h5 shadow-sm p-2 col-12 fw-bold" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" readonly>
            </div>
          </div>
          <div class = "row">
                <div class = "col-4">
              <h6 class="m-0 b-0" >Purpose</h6>
             
              <input type="text" name = "pengradepurpose" id="pengradepurpose" class=" fs-6 shadow-sm p-2 col-12 fw-bold" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" readonly>
            </div>
            <div class = "col-8">
              <h6 class="m-0 b-0" >Full Name</h6>
             
              <input type="text" name = "pengradename" id="pengradename" class=" shadow-sm p-2 col-12 fw-bold" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" readonly>
            </div>
          </div>
              <h6 class="" >Status:</h6>
             
              <div class = "col-4  ">
              <input type="text" id="pengradestatus" class="form-control bg-warning text-white col-4 fw-bold h4" aria-label="Default" aria-describedby="inputGroup-sizing-default" readonly  readonly>
          </div>
           
      </div>
      <div class="modal-footer">
        <button name = "approvebtn" type = "submit" id="doneapprove" class="btn btn-primary"  data-bs-dismiss="modal">Approve</button>
        
      </div>
    </div>
  </div>
</div>
</form>
<form action ="declinecode.php" method = "POST">
<!--- decline modal --->

<div class="modal fade overflow-auto" id="DeclinedModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content ">
      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white" id="exampleModalToggleLabel2">Declined</h5>
        <button type="button" class="btn-close" data-bs-target='#ModalReg' data-bs-toggle='modal' data-bs-dismiss='modal'></button>
      </div>
      <div class="modal-body">
        <input hidden type="text" name = "statdecline"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" value="4" readonly>
         <div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence #:</h6>

              <input type="text" name = "penregrefnum" id="pengradedecrefnum" class=" pengraderefnum h5 shadow-sm p-2 col-12 rounded fw-bold" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradedecapptype" class=" pengradeapptype fs-6 shadow-sm p-2 col-12 fw-bold" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Date:</h6>
             

              <input type="text" name = "pengradeappdate" id="pengradedecappdate" class=" pengradeappdate h5 shadow-sm p-2 fw-bold col-12" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" readonly>
            </div>
            </div>
            <div class ="row">
              <div class = "col-4">
              <h6 class="m-0 b-0" >Student Id:</h6>
             

              <input type="text" name = "pengradestudid" id="pengradedecstudid" class=" pengradestudid h5 shadow-sm p-2 col-12 fw-bold " aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Course</h6>
             
              <input type="text" name = "pengradecourse" id="pengradedeccourse" class=" pengradecourse h5 shadow-sm p-2 col-12 fw-bold" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Year</h6>
             
              <input type="text" name = "pengradeyear" id="pengradedecyear" class=" pengradeyear h5 shadow-sm p-2 col-12 fw-bold" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" readonly>
            </div>
          </div>
          <div class = "row">
                <div class = "col-4">
              <h6 class="m-0 b-0" >Purpose</h6>
             
              <input type="text" name = "pengradepurpose" id="pengradedecpurpose" class=" pengradepurpose fs-6 shadow-sm p-2 col-12 fw-bold" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" readonly>
            </div>
            <div class = "col-8">
              <h6 class="m-0 b-0" >Full Name</h6>
             
              <input type="text" name = "pengradename" id="pengradedecname" class=" pengradename shadow-sm p-2 col-12 fw-bold" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" readonly>
            </div>
          </div>
              <div class = "row">
                <div class = "col-4  ">
              <h6 class="" >Status:</h6>
             
              
              <input type="text" id="pengradestatus" class=" pengradestatus form-control bg-warning text-white col-12 fw-bold h4" aria-label="Default" value = "Pending" aria-describedby="inputGroup-sizing-default" readonly  readonly>
          </div>
          <div class = "col-8  ">
          <h6 class="" >Reason:</h6>
             
              <div class = "  ">
              <textarea type="text" id="declinereason" name = "declinereason" rows="2" cols="50" class="form-control col-4 fw-bold h4" aria-label="Default" aria-describedby="inputGroup-sizing-default" ></textarea> 
          </div>
        </div>
        </div>
           
      </div>
      <div class="modal-footer">
        <button name = "declinebtn" type = "submit" id="declinebtn" class="btn btn-danger"  data-bs-dismiss="modal">Decline</button>
        
      </div>
    </div>
  </div>
</div>
</form>

</body>
</html>