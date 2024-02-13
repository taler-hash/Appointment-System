<?php
include('conn.php');
?>
<!DOCTYPE html>
<title>Track</title>
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
<body class = " text-dark bg-opacity-25">
  <div class = "container d-flex justify-content-around pt-5">
	<div class="card shadow rounded-3">
  <div class="card-header bg-success justify-content-center text-center">
<script>
    function successdisable() {
     if(document.getElementById("id").value==="" ) { 
            document.getElementById('trackdonebtn').disabled = true; 
        } else { 
            document.getElementById('trackdonebtn').disabled = false;
        }
    }
</script>
    <h5 class = "fw-bold text-white">Search Referrence Number</h5></div>

  <div class="card-body justify-content-center text-center">
    <input onkeyup="successdisable()" id="id" name = "id" class="form-control form-control-lg" type="number" placeholder="Search ">
    
  </div>
  <div class = "card-body text-center border">
    <button type="submit"  name="searchdone" id="trackdonebtn" class="btn btn-primary" disabled>Search</button>
  </div>
</div>
</div>



<div class="modal fade " id="TrackDone" data-bs-backdrop="static" data-bs-keyboard="false" >

  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content ">
      <div class="modal-header bg-success">
        <h5 class="modal-title text-white" id="exampleModalToggleLabel2">Track your Appointment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
        
            <div id="TrackModal">


      </div>
       

          
     
    </div>
  </div>
</div>
<script>

$(document).ready(function (){
        $('#trackdonebtn').click(function (e){
            e.preventDefault();

            var id = $('#id').val();
            $.ajax({
                    type: "POST",
                    url: "detchdatatrack.php",
                    data: {
                            "search_post_btn": 1,
                            "id": id,
                    },
                    dataType: "text",
                    success: function(response){
                        $("#TrackModal").html(response);
                        $("#TrackDone").modal('show');
                    }

            });
        });

});

    </script>
</body>
</html>