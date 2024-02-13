
<?php
include ('conn.php');
if(isset($_POST['search_post_btn']))
{
  $id = $_POST['id'];

  $query = "SELECT * FROM appointment WHERE refnum = '$id'";
  $query_run = mysqli_query($con, $query);

  if($query_run)
  { 

    foreach ($query_run as $row){

      if($row !== 0){
        if($row['appoint_type'] == 'Registration'){
        
    ?>

    <div class = "container px-3 pt-3 justify-content-center">
<input hidden type="text" name = "statapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default " style="border:0;" value="2" readonly>
  <div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence #:</h6>

              <input type="text" name = "penregrefnum" id="pengraderefnum" class=" h5 shadow-sm p-2 col-12 rounded fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['refnum'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_type'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Scheduled Date:</h6>
             

              <input type="text" name = "penregdate" id="pengradeappdate" class=" h5 shadow-sm p-2 fw-bold col-12 justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_date'];?>" style="border:0;" readonly>
            </div>
            </div>
          
           
              <h6 class="m-0 b-0" >Full Name</h6>
             
              <input type="text" name = "pengradename" id="pengradename" class=" shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['name'];?>" style="border:0;" readonly>
            
          
              <div class = " justify-content-center text-center ">
              <h6 class="" >Status:</h6>
             
              
               <?php if($row['statid'] == '1')
              {
              ?><input type="text" id="pengradestatus" class="form-control bg-warning text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Pending" readonly  readonly>
          </div>
              <?php
              }  
              if($row['statid'] == '2'){
                ?>

                <input type="text" id="pengradestatus" class="form-control bg-primary text-center text-white mb-2 col-4 fw-bold fs-4" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Approved" readonly  readonly>
          </div>



                <?php
              }
              if($row['statid'] == '3'){
                ?>
                <input type="text" id="pengradestatus" class="form-control bg-success text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Done" readonly  readonly>
          </div>

                <?php
              }
              if($row['statid'] == '4'){

                ?>

                <input type="text" id="pengradestatus" class="form-control bg-danger text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Decline" readonly  readonly>
          </div> 
          <h6 class="" >Reason:</h6>
             <script>
                $(document).ready(function (){ 

                  document.getElementById("declinereason").value = "<?php 
                echo $row['decreason'];?>";




                });
             </script>
              <div class = "  ">
              <textarea type="text" id="declinereason" name = "declinereason" rows="4" cols="50" class="form-control col-4 fw-bold h4" aria-label="Default" aria-describedby="inputGroup-sizing-default" readonly readonly ></textarea> 
          </div>





                <?php


              }




              ?>
            
          </div>
        </div>


  

                <?php


              }




              ?>
              





       
    <?php
  
}
if($row['appoint_type'] == 'Enrollment'){
  ?>
    
<div class = "container px-3 pt-3 justify-content-center">
<input hidden type="text" name = "statapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default " style="border:0;" value="2" readonly>
  <div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence #:</h6>

              <input type="text" name = "penregrefnum" id="pengraderefnum" class=" h5 shadow-sm p-2 col-12 rounded fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['refnum'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_type'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Scheduled Date:</h6>
             

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
            <div class = "col-8">
              <h6 class="m-0 b-0" >Full Name</h6>
             
              <input type="text" name = "pengradename" id="pengradename" class=" shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['name'];?>" style="border:0;" readonly>
            </div>
          </div>
              <div class = " justify-content-center text-center ">
              <h6 class="" >Status:</h6>
             
              
               <?php if($row['statid'] == '1')
              {
              ?><input type="text" id="pengradestatus" class="form-control bg-warning text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Pending" readonly  readonly>
          </div>
              <?php
              }  
              if($row['statid'] == '2'){
                ?>

                <input type="text" id="pengradestatus" class="form-control bg-primary text-center text-white mb-2 col-4 fw-bold fs-4" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Approved" readonly  readonly>
          </div>


                <?php
              }
              if($row['statid'] == '3'){
                ?>
                <input type="text" id="pengradestatus" class="form-control bg-success text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Done" readonly  readonly>
          </div>

                <?php
              }
              if($row['statid'] == '4'){

                ?>

                <input type="text" id="pengradestatus" class="form-control bg-danger text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Decline" readonly  readonly>
          </div> 
          <h6 class="" >Reason:</h6>
             <script>
                $(document).ready(function (){ 

                  document.getElementById("declinereason").value = "<?php 
                echo $row['decreason'];?>";




                });
             </script>
              <div class = "  ">
              <textarea type="text" id="declinereason" name = "declinereason" rows="4" cols="50" class="form-control col-4 fw-bold h4" aria-label="Default" aria-describedby="inputGroup-sizing-default" readonly readonly ></textarea> 
          </div>





                <?php


              }




              ?>
            
          </div>
        </div>


  <?php
}
if(preg_match('/^Others:/',$row['appoint_type'])){
  ?>
     
  <div class = "container px-3 pt-3 justify-content-center">
<input hidden type="text" name = "statapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default " style="border:0;" value="2" readonly>
  <div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence #:</h6>

              <input type="text" name = "penregrefnum" id="pengraderefnum" class=" h5 shadow-sm p-2 col-12 rounded fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['refnum'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_type'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Scheduled Date:</h6>
             

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
             
              
               <?php if($row['statid'] == '1')
              {
              ?><input type="text" id="pengradestatus" class="form-control bg-warning text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Pending" readonly  readonly>
          </div>
              <?php
              }  
              if($row['statid'] == '2'){
                ?>

                <input type="text" id="pengradestatus" class="form-control bg-primary text-center text-white mb-2 col-4 fw-bold fs-4" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Approved" readonly  readonly>
          </div>


                <?php
              }
              if($row['statid'] == '3'){
                ?>
                <input type="text" id="pengradestatus" class="form-control bg-success text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Done" readonly  readonly>
          </div>

                <?php
              }
              if($row['statid'] == '4'){

                ?>

                <input type="text" id="pengradestatus" class="form-control bg-danger text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Decline" readonly  readonly>
          </div> 
          <h6 class="" >Reason:</h6>
             <script>
                $(document).ready(function (){ 

                  document.getElementById("declinereason").value = "<?php 
                echo $row['decreason'];?>";




                });
             </script>
              <div class = "  ">
              <textarea type="text" id="declinereason" name = "declinereason" rows="4" cols="50" class="form-control col-4 fw-bold h4" aria-label="Default" aria-describedby="inputGroup-sizing-default" readonly readonly ></textarea> 
          </div>





                <?php


              }




              ?>
            
          </div>
        </div>


  <?php
}
if(preg_match('/^Cert of/',$row['appoint_type'])){
  ?>
  <div class = "container px-3 pt-3 justify-content-center">
<input hidden type="text" name = "statapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default " style="border:0;" value="2" readonly>
  <div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence #:</h6>

              <input type="text" name = "penregrefnum" id="pengraderefnum" class=" h5 shadow-sm p-2 col-12 rounded fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['refnum'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_type'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Scheduled Date:</h6>
             

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
             
              
               <?php if($row['statid'] == '1')
              {
              ?><input type="text" id="pengradestatus" class="form-control bg-warning text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Pending" readonly  readonly>
          </div>
              <?php
              }  
              if($row['statid'] == '2'){
                ?>

                <input type="text" id="pengradestatus" class="form-control bg-primary text-center text-white mb-2 col-4 fw-bold fs-4" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Approved" readonly  readonly>
          </div>



                <?php
              }
              if($row['statid'] == '3'){
                ?>
                <input type="text" id="pengradestatus" class="form-control bg-success text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Done" readonly  readonly>
          </div>

                <?php
              }
              if($row['statid'] == '4'){

                ?>

                <input type="text" id="pengradestatus" class="form-control bg-danger text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Decline" readonly  readonly>
          </div> 
          <h6 class="" >Reason:</h6>
             <script>
                $(document).ready(function (){ 

                  document.getElementById("declinereason").value = "<?php 
                echo $row['decreason'];?>";




                });
             </script>
              <div class = "  ">
              <textarea type="text" id="declinereason" name = "declinereason" rows="4" cols="50" class="form-control col-4 fw-bold h4" aria-label="Default" aria-describedby="inputGroup-sizing-default" readonly readonly ></textarea> 
          </div>





                <?php


              }




              ?>
            
          </div>
        </div>

       

  <?php
}
if(preg_match('/^Certificate True Copy/',$row['appoint_type'])){
  ?>
  <div class = "container px-3 pt-3 justify-content-center">
<input hidden type="text" name = "statapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default " style="border:0;" value="2" readonly>
  <div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence #:</h6>

              <input type="text" name = "penregrefnum" id="pengraderefnum" class=" h5 shadow-sm p-2 col-12 rounded fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['refnum'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_type'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Scheduled Date:</h6>
             

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
             
              
               <?php if($row['statid'] == '1')
              {
              ?><input type="text" id="pengradestatus" class="form-control bg-warning text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Pending" readonly  readonly>
          </div>
              <?php
              }  
              if($row['statid'] == '2'){
                ?>

                <input type="text" id="pengradestatus" class="form-control bg-primary text-center text-white mb-2 col-4 fw-bold fs-4" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Approved" readonly  readonly>
          </div>


                <?php
              }
              if($row['statid'] == '3'){
                ?>
                <input type="text" id="pengradestatus" class="form-control bg-success text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Done" readonly  readonly>
          </div>

                <?php
              }
              if($row['statid'] == '4'){

                ?>

                <input type="text" id="pengradestatus" class="form-control bg-danger text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Decline" readonly  readonly>
          </div> 
          <h6 class="" >Reason:</h6>
             <script>
                $(document).ready(function (){ 

                  document.getElementById("declinereason").value = "<?php 
                echo $row['decreason'];?>";




                });
             </script>
              <div class = "  ">
              <textarea type="text" id="declinereason" name = "declinereason" rows="4" cols="50" class="form-control col-4 fw-bold h4" aria-label="Default" aria-describedby="inputGroup-sizing-default" readonly readonly ></textarea> 
          </div>





                <?php


              }




              ?>
            
          </div>
        </div>



  <?php
}
if($row['appoint_type'] == 'TOR'){
  ?>
<div class = "container px-3 pt-3 justify-content-center">
<input hidden type="text" name = "statapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default " style="border:0;" value="2" readonly>
  <div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence #:</h6>

              <input type="text" name = "penregrefnum" id="pengraderefnum" class=" h5 shadow-sm p-2 col-12 rounded fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['refnum'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_type'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Scheduled Date:</h6>
             

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
             
              
               <?php if($row['statid'] == '1')
              {
              ?><input type="text" id="pengradestatus" class="form-control bg-warning text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Pending" readonly  readonly>
          </div>
              <?php
              }  
              if($row['statid'] == '2'){
                ?>

                <input type="text" id="pengradestatus" class="form-control bg-primary text-center text-white mb-2 col-4 fw-bold fs-4" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Approved" readonly  readonly>
          </div>

                <?php
              }
              if($row['statid'] == '3'){
                ?>
                <input type="text" id="pengradestatus" class="form-control bg-success text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Done" readonly  readonly>
          </div>

                <?php
              }
              if($row['statid'] == '4'){

                ?>

                <input type="text" id="pengradestatus" class="form-control bg-danger text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Decline" readonly  readonly>
          </div> 
          <h6 class="" >Reason:</h6>
             <script>
                $(document).ready(function (){ 

                  document.getElementById("declinereason").value = "<?php 
                echo $row['decreason'];?>";




                });
             </script>
              <div class = "  ">
              <textarea type="text" id="declinereason" name = "declinereason" rows="4" cols="50" class="form-control col-4 fw-bold h4" aria-label="Default" aria-describedby="inputGroup-sizing-default" readonly readonly ></textarea> 
          </div>





                <?php


              }




              ?>
            
          </div>
        </div>


  <?php
}
if($row['appoint_type'] == 'Change/Add Subject'){
  ?>
 
 <div class = "container px-3 pt-3 justify-content-center">
<input hidden type="text" name = "statapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default " style="border:0;" value="2" readonly>
  <div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence #:</h6>

              <input type="text" name = "penregrefnum" id="pengraderefnum" class=" h5 shadow-sm p-2 col-12 rounded fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['refnum'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_type'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Scheduled Date:</h6>
             

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
            <div class = "col-8">
              <h6 class="m-0 b-0" >Full Name</h6>
             
              <input type="text" name = "pengradename" id="pengradename" class=" shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['name'];?>" style="border:0;" readonly>
            </div>
          </div>
              <div class = " justify-content-center text-center ">
              <h6 class="" >Status:</h6>
             
              
               <?php if($row['statid'] == '1')
              {
              ?><input type="text" id="pengradestatus" class="form-control bg-warning text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Pending" readonly  readonly>
          </div>
              <?php
              }  
              if($row['statid'] == '2'){
                ?>

                <input type="text" id="pengradestatus" class="form-control bg-primary text-center text-white mb-2 col-4 fw-bold fs-4" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Approved" readonly  readonly>
          </div>

                <?php
              }
              if($row['statid'] == '3'){
                ?>
                <input type="text" id="pengradestatus" class="form-control bg-success text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Done" readonly  readonly>
          </div>

                <?php
              }
              if($row['statid'] == '4'){

                ?>

                <input type="text" id="pengradestatus" class="form-control bg-danger text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Decline" readonly  readonly>
          </div> 
          <h6 class="" >Reason:</h6>
             <script>
                $(document).ready(function (){ 

                  document.getElementById("declinereason").value = "<?php 
                echo $row['decreason'];?>";




                });
             </script>
              <div class = "  ">
              <textarea type="text" id="declinereason" name = "declinereason" rows="4" cols="50" class="form-control col-4 fw-bold h4" aria-label="Default" aria-describedby="inputGroup-sizing-default" readonly readonly ></textarea> 
          </div>





                <?php


              }




              ?>
            
          </div>
        </div>


  <?php
}

if($row['appoint_type'] == 'Grades'){
  ?>
  <div class = "container px-3 pt-3 justify-content-center">
<input hidden type="text" name = "statapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default " style="border:0;" value="2" readonly>
  <div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence #:</h6>

              <input type="text" name = "penregrefnum" id="pengraderefnum" class=" h5 shadow-sm p-2 col-12 rounded fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['refnum'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_type'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Scheduled Date:</h6>
             

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
             
              
               <?php if($row['statid'] == '1')
              {
              ?><input type="text" id="pengradestatus" class="form-control bg-warning text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Pending" readonly  readonly>
          </div>
              <?php
              }  
              if($row['statid'] == '2'){
                ?>

                <input type="text" id="pengradestatus" class="form-control bg-primary text-center text-white mb-2 col-4 fw-bold fs-4" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Approved" readonly  readonly>
          </div>
                



                <?php
              }
              if($row['statid'] == '3'){
                ?>
                <input type="text" id="pengradestatus" class="form-control bg-success text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Done" readonly  readonly>
          </div>

                <?php
              }
              if($row['statid'] == '4'){

                ?>

                <input type="text" id="pengradestatus" class="form-control bg-danger text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Decline" readonly  readonly>
          </div> 
          <h6 class="" >Reason:</h6>
             <script>
                $(document).ready(function (){ 

                  document.getElementById("declinereason").value = "<?php 
                echo $row['decreason'];?>";




                });
             </script>
              <div class = "  ">
              <textarea type="text" id="declinereason" name = "declinereason" rows="4" cols="50" class="form-control col-4 fw-bold h4" aria-label="Default" aria-describedby="inputGroup-sizing-default" readonly readonly ></textarea> 
          </div>





                <?php


              }




              ?>
            
          </div>
        </div>

  <?php
}

if($row['appoint_type'] == 'Diploma'){
  ?>
  <div class = "container px-3 pt-3 justify-content-center">
<input hidden type="text" name = "statapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default " style="border:0;" value="2" readonly>
  <div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence #:</h6>

              <input type="text" name = "penregrefnum" id="pengraderefnum" class=" h5 shadow-sm p-2 col-12 rounded fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['refnum'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_type'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Scheduled Date:</h6>
             

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
             
              
               <?php if($row['statid'] == '1')
              {
              ?><input type="text" id="pengradestatus" class="form-control bg-warning text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Pending" readonly  readonly>
          </div>
              <?php
              }  
              if($row['statid'] == '2'){
                ?>

                <input type="text" id="pengradestatus" class="form-control bg-primary text-center text-white mb-2 col-4 fw-bold fs-4" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Approved" readonly  readonly>
          </div>

                <?php
              }
              if($row['statid'] == '3'){
                ?>
                <input type="text" id="pengradestatus" class="form-control bg-success text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Done" readonly  readonly>
          </div>

                <?php
              }
              if($row['statid'] == '4'){

                ?>

                <input type="text" id="pengradestatus" class="form-control bg-danger text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Decline" readonly  readonly>
          </div> 
          <h6 class="" >Reason:</h6>
             <script>
                $(document).ready(function (){ 

                  document.getElementById("declinereason").value = "<?php 
                echo $row['decreason'];?>";




                });
             </script>
              <div class = "  ">
              <textarea type="text" id="declinereason" name = "declinereason" rows="4" cols="50" class="form-control col-4 fw-bold h4" aria-label="Default" aria-describedby="inputGroup-sizing-default" readonly readonly ></textarea> 
          </div>





                <?php


              }




              ?>
            
          </div>
        </div>


  <?php
}

if($row['appoint_type'] == 'Certificate of Good Moral Character'){
  ?>
 <div class = "container px-3 pt-3 justify-content-center">
<input hidden type="text" name = "statapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default " style="border:0;" value="2" readonly>
  <div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence #:</h6>

              <input type="text" name = "penregrefnum" id="pengraderefnum" class=" h5 shadow-sm p-2 col-12 rounded fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['refnum'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_type'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Scheduled Date:</h6>
             

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
             
              
               <?php if($row['statid'] == '1')
              {
              ?><input type="text" id="pengradestatus" class="form-control bg-warning text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Pending" readonly  readonly>
          </div>
              <?php
              }  
              if($row['statid'] == '2'){
                ?>

                <input type="text" id="pengradestatus" class="form-control bg-primary text-center text-white mb-2 col-4 fw-bold fs-4" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Approved" readonly  readonly>
          </div>

                <?php
              }
              if($row['statid'] == '3'){
                ?>
                <input type="text" id="pengradestatus" class="form-control bg-success text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Done" readonly  readonly>
          </div>

                <?php
              }
              if($row['statid'] == '4'){

                ?>

                <input type="text" id="pengradestatus" class="form-control bg-danger text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Decline" readonly  readonly>
          </div> 
          <h6 class="" >Reason:</h6>
             <script>
                $(document).ready(function (){ 

                  document.getElementById("declinereason").value = "<?php 
                echo $row['decreason'];?>";




                });
             </script>
              <div class = "  ">
              <textarea type="text" id="declinereason" name = "declinereason" rows="4" cols="50" class="form-control col-4 fw-bold h4" aria-label="Default" aria-describedby="inputGroup-sizing-default" readonly readonly ></textarea> 
          </div>





                <?php


              }




              ?>
            
          </div>
        </div>


  <?php
}

if($row['appoint_type'] == 'Certificate of Transfer Credentials'){
  ?>
  <div class = "container px-3 pt-3 justify-content-center">
<input hidden type="text" name = "statapprove"  class=" none" aria-label="Default" aria-describedby="inputGroup-sizing-default " style="border:0;" value="2" readonly>
  <div class = "row">
                <div class = "col-4">
                <h6 class="m-0 b-0" >Referrence #:</h6>

              <input type="text" name = "penregrefnum" id="pengraderefnum" class=" h5 shadow-sm p-2 col-12 rounded fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['refnum'];?>" style="border:0;" readonly>
            </div>
            <div class = "col-4">
              <h6 class="m-0 b-0" >Appointment Type:</h6>

              <input type="text" name = "pengradeapptype" id="pengradeapptype" class=" fs-6 shadow-sm p-2 col-12 fw-bold justify-content-center text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "<?php 
                echo $row['appoint_type'];?>" style="border:0;" readonly>
            </div>
              <div class = "col-4">
              <h6 class="m-0 b-0" >Scheduled Date:</h6>
             

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
             
              
               <?php if($row['statid'] == '1')
              {
              ?><input type="text" id="pengradestatus" class="form-control bg-warning text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Pending" readonly  readonly>
          </div>
              <?php
              }  
              if($row['statid'] == '2'){
                ?>

                <input type="text" id="pengradestatus" class="form-control bg-primary text-center text-white mb-2 col-4 fw-bold fs-4" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Approved" readonly  readonly>
          </div>


                <?php
              }
              if($row['statid'] == '3'){
                ?>
                <input type="text" id="pengradestatus" class="form-control bg-success text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Done" readonly  readonly>
          </div>

                <?php
              }
              if($row['statid'] == '4'){

                ?>

                <input type="text" id="pengradestatus" class="form-control bg-danger text-center text-white col-4 fw-bold fs-4 mb-3" aria-label="Default" aria-describedby="inputGroup-sizing-default" value = "Decline" readonly  readonly>
          </div> 
          <h6 class="" >Reason:</h6>
             <script>
                $(document).ready(function (){ 

                  document.getElementById("declinereason").value = "<?php 
                echo $row['decreason'];?>";




                });
             </script>
              <div class = "  ">
              <textarea type="text" id="declinereason" name = "declinereason" rows="4" cols="50" class="form-control col-4 fw-bold h4" aria-label="Default" aria-describedby="inputGroup-sizing-default" readonly readonly ></textarea> 
          </div>





                <?php


              }




              ?>
            
          </div>
        </div>

  <?php
}


}

}




}


?>