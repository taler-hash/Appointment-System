<?php
include ('conn.php');
if(isset($_POST['search_post_btn']))
{
	$id = $_POST['id'];

	$query = "SELECT * FROM appointment WHERE refnum = '$id' AND statid = '2'";
	$query_run = mysqli_query($con, $query);

	if($query_run)
	{ 

		foreach ($query_run as $row){

      if($row !== 0){
        if($row['appoint_type'] == 'Registration'){
        
		?>
    <script>
    
    $(document).on('click','#donebtn', function(){
        $.ajax({
            url:"donecode.php",
            type:"post",
            data:$("#DoneModal").serialize(),
            success:function(data){
                location.reload();
            }
        });
    });
  </script>

  <form action = "donecode.php" method="POST">
<div class = "modal-body">
<div class ="container ">
  <div class = "row">
                
                <div class = "col-4">
                  <input hidden type="text" name = "doneapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" value="3" readonly>
                <h6 class="m-0 b-0" >Referrence Number:</h6>

              <input type="text" name = "penregrefnum" id="pengraderefnum" class=" text-center h5 shadow-sm p-2 col-12 rounded fw-bold" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
              	echo $row['refnum'];?>" style="border:0;"readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" text-center fs-6 shadow-sm p-2 col-12 fw-bold" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
              	echo $row['appoint_type'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Date:</h6>
             

              <input type="text" name = "penregdate" id="pengradeappdate" class=" text-center h5 shadow-sm p-2 fw-bold col-12" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
              	echo $row['appoint_date'];?>" style="border:0;" readonly>
            </div>
            </div>
      				<div class = "row justify-content-center">
                
            
            <div class = "col-8">
              <h6 class="m-0 b-0" >Full Name</h6>
             
              <input type="text" class=" text-center h5 shadow-sm p-2 col-12 fw-bold" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
              	echo $row['name'];?>" style="border:0;" readonly>
            </div>
       		</div>
          <div class = " justify-content-center ">
              <h6 class="" >Status:</h6>
             
              
              <input type="text" id="pengradestatus" class="form-control bg-primary text-center text-white col-4 fw-bold fs-4" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Approved" readonly  readonly>
          </div>



      </div>
    </div>
    <div class="modal-footer pt-2 pb-0 px-3">
        <button name = "donebtn" type = "submit" id="donebtn" class="btn btn-success px-2" >Done</button>
        
      </div>
           </form>
       
       
		<?php
	
}
if($row['appoint_type'] == 'Enrollment'){
  ?>
      <script>
    
    $(document).on('click','#donebtn', function(){
        $.ajax({
            url:"donecode.php",
            type:"post",
            data:$("#DoneModal").serialize(),
            success:function(data){
                location.reload();
            }
        });
    });
  </script>
   <form action = "donecode.php" method="POST">
<div class = "modal-body">
<div class ="container ">

<input hidden type="text" name = "doneapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" value="3" readonly>

  <div class = "row">
                <input hidden type="text" name = "doneapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" value="3" readonly>
                 <div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence Number:</h6>

              <input type="text" name = "penregrefnum" id="pengraderefnum" class=" h5 shadow-sm p-2 col-12 rounded fw-bold" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['refnum'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" fs-6 shadow-sm p-2 col-12 fw-bold" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_type'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Date:</h6>
             

              <input type="text" name = "penregdate" id="pengradeappdate" class=" h5 shadow-sm p-2 fw-bold col-12" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_date'];?>" style="border:0;" readonly>
            </div>
            </div>
            <div class ="row">
              <div class = "col-4">
              <h6 class="m-0 b-0" >Student Id:</h6>
             

              <input type="text" name = "pengradestudid" id="pengradestudid" class=" h5 shadow-sm p-2 col-12 fw-bold " aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['student_id'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Course</h6>
             
              <input type="text" name = "pengradecourse" id="pengradecourse" class=" h5 shadow-sm p-2 col-12 fw-bold" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['course'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Year</h6>
             
              <input type="text" name = "pengradeyear" id="pengradeyear" class=" h5 shadow-sm p-2 col-12 fw-bold" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['year'];?>" style="border:0;" readonly>
            </div>
          </div>
          <div class = "row justify-content-center text-center">
            <div class = "col-8">
              <h6 class="m-0 b-0" >Full Name</h6>
             
              <input type="text" name = "pengradename" id="pengradename" class=" shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['name'];?>" style="border:0;" readonly>
            </div>
          </div>
              <div class = " justify-content-center text-center ">
              <h6 class="" >Status:</h6>
             
              
              <input type="text" id="pengradestatus" class="form-control bg-primary text-center text-white col-4 fw-bold fs-4" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Approved" readonly  readonly>
          </div>



      </div>
    </div>
    <div class="modal-footer pt-2 pb-0 px-3">
        <button name = "donebtn" type = "submit" id="donebtn" class="btn btn-success px-2" >OK</button>
        
      </div>
           </form>
  <?php
}
if(preg_match('/^Others:/',$row['appoint_type'])){
  ?>
      <script>
    
    $(document).on('click','#donebtn', function(){
        $.ajax({
            url:"donecode.php",
            type:"post",
            data:$("#DoneModal").serialize(),
            success:function(data){
                location.reload();
            }
        });
    });
  </script>
<form action = "donecode.php" method="POST">
<div class = "modal-body">
<div class ="container ">
  
<input hidden type="text" name = "doneapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" value="3" readonly>
  
<div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence Number:</h6>

              <input type="text" name = "penregrefnum" id="penregrefnum" class=" h5 shadow-sm p-2 col-12 rounded fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['refnum'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_type'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Date:</h6>
             

              <input type="text" name = "penregdate" id="pengradeappdate" class=" h5 shadow-sm p-2 fw-bold col-12 justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_date'];?>" style="border:0;" readonly>
            </div>
            </div>
            <div class ="row">
              <div class = "col-4">
              <h6 class="m-0 b-0" >Student Id:</h6>
             

              <input type="text" name = "pengradestudid" id="pengradestudid" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center " aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['student_id'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Course</h6>
             
              <input type="text" name = "pengradecourse" id="pengradecourse" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['course'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Year</h6>
             
              <input type="text" name = "pengradeyear" id="pengradeyear" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['year'];?>" style="border:0;" readonly>
            </div>
          </div>
          <div class = "row">
                <div class = "col-4">
              <h6 class="m-0 b-0" >Purpose</h6>
             
              <input type="text" name = "pengradepurpose" id="pengradepurpose" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center " aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['purpose'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-8">
              <h6 class="m-0 b-0" >Full Name</h6>
             
              <input type="text" name = "pengradename" id="pengradename" class=" shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['name'];?>" style="border:0;" readonly>
            </div>
          </div>
              <div class = " justify-content-center text-center ">
              <h6 class="" >Status:</h6>
             
              
              <input type="text" id="pengradestatus" class="form-control bg-primary text-center text-white col-4 fw-bold fs-4" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Approved" readonly  readonly>
          </div>








  
    </div>
    <div class="modal-footer pt-2 pb-0 px-3">
        <button name = "donebtn" type = "submit" id="donebtn" class="btn btn-success px-2" >OK</button>
        
      </div>
           </form>
       
  <?php
}
if(preg_match('/^Cert of/',$row['appoint_type'])){
  ?>
   <script>
    
    $(document).on('click','#donebtn', function(){
        $.ajax({
            url:"donecode.php",
            type:"post",
            data:$("#DoneModal").serialize(),
            success:function(data){
                location.reload();
            }
        });
    });
  </script>
<form action = "donecode.php" method="POST">
<div class = "modal-body">
<div class ="container ">
  
<input hidden type="text" name = "doneapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" value="3" readonly>
  
<div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence Number:</h6>

              <input type="text" name = "penregrefnum" id="penregrefnum" class=" h5 shadow-sm p-2 col-12 rounded fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['refnum'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_type'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Date:</h6>
             

              <input type="text" name = "penregdate" id="pengradeappdate" class=" h5 shadow-sm p-2 fw-bold col-12 justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_date'];?>" style="border:0;" readonly>
            </div>
            </div>
            <div class ="row">
              <div class = "col-4">
              <h6 class="m-0 b-0" >Student Id:</h6>
             

              <input type="text" name = "pengradestudid" id="pengradestudid" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center " aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['student_id'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Course</h6>
             
              <input type="text" name = "pengradecourse" id="pengradecourse" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['course'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Year</h6>
             
              <input type="text" name = "pengradeyear" id="pengradeyear" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['year'];?>" style="border:0;" readonly>
            </div>
          </div>
          <div class = "row">
                <div class = "col-4">
              <h6 class="m-0 b-0" >Purpose</h6>
             
              <input type="text" name = "pengradepurpose" id="pengradepurpose" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center " aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['purpose'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-8">
              <h6 class="m-0 b-0" >Full Name</h6>
             
              <input type="text" name = "pengradename" id="pengradename" class=" shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['name'];?>" style="border:0;" readonly>
            </div>
          </div>
              <div class = " justify-content-center text-center ">
              <h6 class="" >Status:</h6>
             
              
              <input type="text" id="pengradestatus" class="form-control bg-primary text-center text-white col-4 fw-bold fs-4" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Approved" readonly  readonly>
          </div>








  
    </div>
    <div class="modal-footer pt-2 pb-0 px-3">
        <button name = "donebtn" type = "submit" id="donebtn" class="btn btn-success px-2" >OK</button>
        
      </div>
           </form>
       

  <?php
}
if(preg_match('/^Certificate True Copy/',$row['appoint_type'])){
  ?>
  <script>
    
    $(document).on('click','#donebtn', function(){
        $.ajax({
            url:"donecode.php",
            type:"post",
            data:$("#DoneModal").serialize(),
            success:function(data){
                location.reload();
            }
        });
    });
  </script>
<form action = "donecode.php" method="POST">
<div class = "modal-body">
<div class ="container ">
  
<input hidden type="text" name = "doneapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" value="3" readonly>
  
<div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence Number:</h6>

              <input type="text" name = "penregrefnum" id="penregrefnum" class=" h5 shadow-sm p-2 col-12 rounded fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['refnum'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_type'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Date:</h6>
             

              <input type="text" name = "penregdate" id="pengradeappdate" class=" h5 shadow-sm p-2 fw-bold col-12 justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_date'];?>" style="border:0;" readonly>
            </div>
            </div>
            <div class ="row">
              <div class = "col-4">
              <h6 class="m-0 b-0" >Student Id:</h6>
             

              <input type="text" name = "pengradestudid" id="pengradestudid" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center " aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['student_id'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Course</h6>
             
              <input type="text" name = "pengradecourse" id="pengradecourse" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['course'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Year</h6>
             
              <input type="text" name = "pengradeyear" id="pengradeyear" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['year'];?>" style="border:0;" readonly>
            </div>
          </div>
          <div class = "row">
                <div class = "col-4">
              <h6 class="m-0 b-0" >Purpose</h6>
             
              <input type="text" name = "pengradepurpose" id="pengradepurpose" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center " aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['purpose'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-8">
              <h6 class="m-0 b-0" >Full Name</h6>
             
              <input type="text" name = "pengradename" id="pengradename" class=" shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['name'];?>" style="border:0;" readonly>
            </div>
          </div>
              <div class = " justify-content-center text-center ">
              <h6 class="" >Status:</h6>
             
              
              <input type="text" id="pengradestatus" class="form-control bg-primary text-center text-white col-4 fw-bold fs-4" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Approved" readonly  readonly>
          </div>








  
    </div>
    <div class="modal-footer pt-2 pb-0 px-3">
        <button name = "donebtn" type = "submit" id="donebtn" class="btn btn-success px-2" >OK</button>
        
      </div>
           </form>
       


  <?php
}
if($row['appoint_type'] == 'TOR'){
  ?>
  <script>
    
    $(document).on('click','#donebtn', function(){
        $.ajax({
            url:"donecode.php",
            type:"post",
            data:$("#DoneModal").serialize(),
            success:function(data){
                location.reload();
            }
        });
    });
  </script>
<form action = "donecode.php" method="POST">
<div class = "modal-body">
<div class ="container ">
  
<input hidden type="text" name = "doneapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" value="3" readonly>
  
<div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence Number:</h6>

              <input type="text" name = "penregrefnum" id="penregrefnum" class=" h5 shadow-sm p-2 col-12 rounded fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['refnum'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_type'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Date:</h6>
             

              <input type="text" name = "penregdate" id="pengradeappdate" class=" h5 shadow-sm p-2 fw-bold col-12 justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_date'];?>" style="border:0;" readonly>
            </div>
            </div>
            <div class ="row">
              <div class = "col-4">
              <h6 class="m-0 b-0" >Student Id:</h6>
             

              <input type="text" name = "pengradestudid" id="pengradestudid" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center " aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['student_id'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Course</h6>
             
              <input type="text" name = "pengradecourse" id="pengradecourse" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['course'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Year</h6>
             
              <input type="text" name = "pengradeyear" id="pengradeyear" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['year'];?>" style="border:0;" readonly>
            </div>
          </div>
          <div class = "row">
                <div class = "col-4">
              <h6 class="m-0 b-0" >Purpose</h6>
             
              <input type="text" name = "pengradepurpose" id="pengradepurpose" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center " aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['purpose'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-8">
              <h6 class="m-0 b-0" >Full Name</h6>
             
              <input type="text" name = "pengradename" id="pengradename" class=" shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['name'];?>" style="border:0;" readonly>
            </div>
          </div>
              <div class = " justify-content-center text-center ">
              <h6 class="" >Status:</h6>
             
              
              <input type="text" id="pengradestatus" class="form-control bg-primary text-center text-white col-4 fw-bold fs-4" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Approved" readonly  readonly>
          </div>








  
    </div>
    <div class="modal-footer pt-2 pb-0 px-3">
        <button name = "donebtn" type = "submit" id="donebtn" class="btn btn-success px-2" >OK</button>
        
      </div>
           </form>
       


  <?php
}
if($row['appoint_type'] == 'Change/Add Subject'){
  ?>
  <script>
    
    $(document).on('click','#donebtn', function(){
        $.ajax({
            url:"donecode.php",
            type:"post",
            data:$("#DoneModal").serialize(),
            success:function(data){
                location.reload();
            }
        });
    });
  </script>
<form action = "donecode.php" method="POST">
<div class = "modal-body pb-0">
<div class ="container ">
  
<input hidden type="text" name = "doneapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" value="3" readonly>
  
<div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence Number:</h6>

              <input type="text" name = "penregrefnum" id="penregrefnum" class=" h5 shadow-sm p-2 col-12 rounded fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['refnum'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_type'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Date:</h6>
             

              <input type="text" name = "penregdate" id="pengradeappdate" class=" h5 shadow-sm p-2 fw-bold col-12 justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_date'];?>" style="border:0;" readonly>
            </div>
            </div>
            <div class ="row">
              <div class = "col-4">
              <h6 class="m-0 b-0" >Student Id:</h6>
             

              <input type="text" name = "pengradestudid" id="pengradestudid" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center " aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['student_id'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Course</h6>
             
              <input type="text" name = "pengradecourse" id="pengradecourse" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['course'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Year</h6>
             
              <input type="text" name = "pengradeyear" id="pengradeyear" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['year'];?>" style="border:0;" readonly>
            </div>
          </div>
          <div class = "row justify-content-center">
            <div class = "col-8">
              <h6 class="m-0 b-0" >Full Name</h6>
             
              <input type="text" name = "pengradename" id="pengradename" class=" shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['name'];?>" style="border:0;" readonly>
            </div>
          </div>
              <div class = " justify-content-center text-center ">
              <h6 class="" >Status:</h6>
             
              
              <input type="text" id="pengradestatus" class="form-control bg-primary text-center text-white col-4 fw-bold fs-4" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Approved" readonly  readonly>
          </div>








  
    </div>
    <div class="modal-footer pt-2 pb-0 px-3">
        <button name = "donebtn" type = "submit" id="donebtn" class="btn btn-success px-2" >OK</button>
        
      </div>
           </form>
       


  <?php
}

if($row['appoint_type'] == 'Grades'){
  ?>
  <script>
    
    $(document).on('click','#donebtn', function(){
        $.ajax({
            url:"donecode.php",
            type:"post",
            data:$("#DoneModal").serialize(),
            success:function(data){
                location.reload();
            }
        });
    });
  </script>
<form action = "donecode.php" method="POST">
<div class = "modal-body pb-0">
<div class ="container ">
  
<input hidden type="text" name = "doneapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" value="3" readonly>
  
<div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence Number:</h6>

              <input type="text" name = "penregrefnum" id="penregrefnum" class=" h5 shadow-sm p-2 col-12 rounded fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['refnum'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_type'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Date:</h6>
             

              <input type="text" name = "penregdate" id="pengradeappdate" class=" h5 shadow-sm p-2 fw-bold col-12 justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_date'];?>" style="border:0;" readonly>
            </div>
            </div>
            <div class ="row">
              <div class = "col-4">
              <h6 class="m-0 b-0" >Student Id:</h6>
             

              <input type="text" name = "pengradestudid" id="pengradestudid" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center " aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['student_id'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Course</h6>
             
              <input type="text" name = "pengradecourse" id="pengradecourse" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['course'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Year</h6>
             
              <input type="text" name = "pengradeyear" id="pengradeyear" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['year'];?>" style="border:0;" readonly>
            </div>
          </div>
          <div class = "row">
                <div class = "col-4">
              <h6 class="m-0 b-0" >Purpose</h6>
             
              <input type="text" name = "pengradepurpose" id="pengradepurpose" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center " aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['purpose'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-8">
              <h6 class="m-0 b-0" >Full Name</h6>
             
              <input type="text" name = "pengradename" id="pengradename" class=" shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['name'];?>" style="border:0;" readonly>
            </div>
          </div>
              <div class = " justify-content-center text-center ">
              <h6 class="" >Status:</h6>
             
              
              <input type="text" id="pengradestatus" class="form-control bg-primary text-center text-white col-4 fw-bold fs-4" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Approved" readonly  readonly>
          </div>








  
    </div>
    <div class="modal-footer pt-2 pb-0 px-3">
        <button name = "donebtn" type = "submit" id="donebtn" class="btn btn-success px-2" >OK</button>
        
      </div>
           </form>
       

  <?php
}

if($row['appoint_type'] == 'Diploma'){
  ?>
  <script>
    
    $(document).on('click','#donebtn', function(){
        $.ajax({
            url:"donecode.php",
            type:"post",
            data:$("#DoneModal").serialize(),
            success:function(data){
                location.reload();
            }
        });
    });
  </script>
<form action = "donecode.php" method="POST">
<div class = "modal-body pb-0">
<div class ="container ">
  
<input hidden type="text" name = "doneapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" value="3" readonly>
  
<div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence Number:</h6>

              <input type="text" name = "penregrefnum" id="penregrefnum" class=" h5 shadow-sm p-2 col-12 rounded fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['refnum'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_type'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Date:</h6>
             

              <input type="text" name = "penregdate" id="pengradeappdate" class=" h5 shadow-sm p-2 fw-bold col-12 justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_date'];?>" style="border:0;" readonly>
            </div>
            </div>
            <div class ="row">
              <div class = "col-4">
              <h6 class="m-0 b-0" >Student Id:</h6>
             

              <input type="text" name = "pengradestudid" id="pengradestudid" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center " aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['student_id'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Course</h6>
             
              <input type="text" name = "pengradecourse" id="pengradecourse" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['course'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Year</h6>
             
              <input type="text" name = "pengradeyear" id="pengradeyear" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['year'];?>" style="border:0;" readonly>
            </div>
          </div>
          <div class = "row">
                <div class = "col-4">
              <h6 class="m-0 b-0" >Purpose</h6>
             
              <input type="text" name = "pengradepurpose" id="pengradepurpose" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center " aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['purpose'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-8">
              <h6 class="m-0 b-0" >Full Name</h6>
             
              <input type="text" name = "pengradename" id="pengradename" class=" shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['name'];?>" style="border:0;" readonly>
            </div>
          </div>
              <div class = " justify-content-center text-center ">
              <h6 class="" >Status:</h6>
             
              
              <input type="text" id="pengradestatus" class="form-control bg-primary text-center text-white col-4 fw-bold fs-4" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Approved" readonly  readonly>
          </div>








  
    </div>
    <div class="modal-footer pt-2 pb-0 px-3">
        <button name = "donebtn" type = "submit" id="donebtn" class="btn btn-success px-2" >OK</button>
        
      </div>
           </form>

 
  <?php
}

if($row['appoint_type'] == 'Certificate of Good Moral Character'){
  ?>
  <script>
    
    $(document).on('click','#donebtn', function(){
        $.ajax({
            url:"donecode.php",
            type:"post",
            data:$("#DoneModal").serialize(),
            success:function(data){
                location.reload();
            }
        });
    });
  </script>
<form action = "donecode.php" method="POST">
<div class = "modal-body pb-0">
<div class ="container ">
  
<input hidden type="text" name = "doneapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" value="3" readonly>
  
<div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence Number:</h6>

              <input type="text" name = "penregrefnum" id="penregrefnum" class=" h5 shadow-sm p-2 col-12 rounded fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['refnum'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_type'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Date:</h6>
             

              <input type="text" name = "penregdate" id="pengradeappdate" class=" h5 shadow-sm p-2 fw-bold col-12 justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_date'];?>" style="border:0;" readonly>
            </div>
            </div>
            <div class ="row">
              <div class = "col-4">
              <h6 class="m-0 b-0" >Student Id:</h6>
             

              <input type="text" name = "pengradestudid" id="pengradestudid" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center " aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['student_id'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Course</h6>
             
              <input type="text" name = "pengradecourse" id="pengradecourse" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['course'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Year</h6>
             
              <input type="text" name = "pengradeyear" id="pengradeyear" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['year'];?>" style="border:0;" readonly>
            </div>
          </div>
          <div class = "row">
                <div class = "col-4">
              <h6 class="m-0 b-0" >Purpose</h6>
             
              <input type="text" name = "pengradepurpose" id="pengradepurpose" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center " aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['purpose'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-8">
              <h6 class="m-0 b-0" >Full Name</h6>
             
              <input type="text" name = "pengradename" id="pengradename" class=" shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['name'];?>" style="border:0;" readonly>
            </div>
          </div>
              <div class = " justify-content-center text-center ">
              <h6 class="" >Status:</h6>
             
              
              <input type="text" id="pengradestatus" class="form-control bg-primary text-center text-white col-4 fw-bold fs-4" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Approved" readonly  readonly>
          </div>








  
    </div>
    <div class="modal-footer pt-2 pb-0 px-3">
        <button name = "donebtn" type = "submit" id="donebtn" class="btn btn-success px-2" >OK</button>
        
      </div>
           </form>

  
  <?php
}

if($row['appoint_type'] == 'Certificate of Transfer Credentials'){
  ?>
  <script>
    
    $(document).on('click','#donebtn', function(){
        $.ajax({
            url:"donecode.php",
            type:"post",
            data:$("#DoneModal").serialize(),
            success:function(data){
                location.reload();
            }
        });
    });
  </script>
<form action = "donecode.php" method="POST">
<div class = "modal-body pb-0">
<div class ="container ">
  
<input hidden type="text" name = "doneapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="border:0;" value="3" readonly>
  
<div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence Number:</h6>

              <input type="text" name = "penregrefnum" id="penregrefnum" class=" h5 shadow-sm p-2 col-12 rounded fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['refnum'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_type'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Date:</h6>
             

              <input type="text" name = "penregdate" id="pengradeappdate" class=" h5 shadow-sm p-2 fw-bold col-12 justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_date'];?>" style="border:0;" readonly>
            </div>
            </div>
            <div class ="row">
              <div class = "col-4">
              <h6 class="m-0 b-0" >Student Id:</h6>
             

              <input type="text" name = "pengradestudid" id="pengradestudid" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center " aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['student_id'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Course</h6>
             
              <input type="text" name = "pengradecourse" id="pengradecourse" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['course'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Year</h6>
             
              <input type="text" name = "pengradeyear" id="pengradeyear" class=" h5 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['year'];?>" style="border:0;" readonly>
            </div>
          </div>
          <div class = "row">
                <div class = "col-4">
              <h6 class="m-0 b-0" >Purpose</h6>
             
              <input type="text" name = "pengradepurpose" id="pengradepurpose" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center " aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['purpose'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-8">
              <h6 class="m-0 b-0" >Full Name</h6>
             
              <input type="text" name = "pengradename" id="pengradename" class=" shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['name'];?>" style="border:0;" readonly>
            </div>
          </div>
              <div class = " justify-content-center text-center ">
              <h6 class="" >Status:</h6>
             
              
              <input type="text" id="pengradestatus" class="form-control bg-primary text-center text-white col-4 fw-bold fs-4" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Approved" readonly  readonly>
          </div>








  
    </div>
    <div class="modal-footer pt-2 pb-0 px-3">
        <button name = "donebtn" type = "submit" id="donebtn" class="btn btn-success px-2" >OK</button>
        
      </div>
           </form>
  <?php
}


}
else{echo "sample1";}
}




}

}

?>