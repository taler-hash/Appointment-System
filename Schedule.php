<?php
	$random =(rand(100000,1000000));;
	include('conn.php');

?>
<?php
include ('conn.php');

$result = "SELECT caterbooked from cater where caterid = '1'";
$query = mysqli_query($con,$result);
$row1 = mysqli_fetch_array($query);
$sched = $row1['caterbooked'];
?>


<!DOCTYPE html>
<html>
<head>
	<title>CCC Appointment</title>
	<link rel="stylesheet" href="fontstyle.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet"
	 href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<style type="text/css">
	input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
	}
</style>

	<style>
  @media (max-width: 767px) {
    .modal-content { overflow-y: scroll; }
}

</style>
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
          while($row2 = $result->fetch_assoc()) {

          	if($row2["COUNT(appoint_date)"] == $sched)
          	{
                 echo $date1 = "'".$row2["appoint_date"]."'".",";
      
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
          while($row2 = $result->fetch_assoc()) {

          	echo "'".$row2["datedisable"]."'".",";
          
          }
          
 			
      }
?>];
function unavailable(date){
	
	var day = date.getDay();
	var string = jQuery.datepicker.formatDate('mm/dd/yy', date);
        return [ day != 0 && day != 6 && disabledDates.indexOf(string) == -1   ];
        
    
}
$('#calendar').datepicker({
	 			minDate:+1,
	 			maxDate:+20,
    beforeShowDay: unavailable 
});


	 	});
	 </script>
	 <!-- Pop up Covid Prevention Function -->
	 <script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal').modal('show');
    });
</script>
<!--Purpose fade effect-->
<script>
	$(document).ready(function() {
		$("#other1").fadeOut(1);
		$("#purposes").fadeOut(1);
$('#purpose').change(function() {
if( $(this).val() == "Others") {
$("#other1").fadeIn(1000);
$('#others1').val('');
}
else{
	$("#other1").fadeOut(1000);
	$('#others1').val('');
}
});
});
</script>	
<!-- Disable input text function with fade effect -->
<script>
$(document).ready(function() {
	$("#other").fadeOut(0);
	$("#certof").fadeOut(0);
	$("#truecopy").fadeOut(0);
  var year1 = new String("");
 	$('#selection').change(function() {
 		
  	if( $(this).val() == "Registration") {
       		$('#studid').prop( "disabled", true );
       		$('#year').prop( "disabled", true );
       		$('#course').prop( "disabled", true );
       		$('#calendar').val('');
       		$('#year').val('');
       		$('#studid').val('');
       		$('#course').val('');
       		$('#name').val('');
       		$('#calendar').val('');
       		$('#certofs').val('');
       		$('#truecopys').val('');
       		$('#others').val('');
       		$('#calendar').prop( "disabled", false );
       		$("#studcoursefade").fadeOut(1000);
       		$("#certof").fadeOut(1000);
       		$("#truecopy").fadeOut(1000);
       		$("#other").fadeOut(1000);
       		$("#purposes").fadeOut(1000);
       		$("#calendar").attr('readonly', 'readonly');
       		$("#yearfade").fadeOut(1000);
       					
       			$("#name").keyup(function(event) {
        validateInputs();
   				 });
 
				    $("#calendar").change(function(event) {
        validateInputs();
   				 });


       		function validateInputs(){
       			var disablebtn = false;
       			 var name1 = $('#name').val();
       			 var calendar1 = $('#calendar').val();

       			 if(name1.length == 0 || calendar1.length < 10 ){
       			 	 $('#proceedbtn').attr('disabled', true);
       			 	 
       			 }
       			 else
       			 {
       			 	$('#proceedbtn').attr('disabled', false);
       			
       			 }
       		}
    }

    else if( $(this).val() == "Diploma"	) {
    			$('#calendar').val('');
    			$('#year').val('');
	       		$('#studid').val('');
	       		$('#course').val('Select Course');
	       		$('#purpose').val('Select Purpose');
	       		$('#name').val('');
	       		$('#certofs').val('');
    			$('#studid').prop( "disabled", false );
    			$('#course').prop( "disabled", false );
    			document.getElementById('year').value = document.getElementById('4th').value;
    			$('#year').attr("style", "pointer-events: none;");
    			$("one").fadeOut();
    			$("#calendar").attr('readonly', 'readonly');
    			$("#studcoursefade").fadeIn(1000);
    			$("#certof").fadeOut(1000);
    			$("#purposes").fadeIn(1000);
       		$("#yearfade").fadeIn(1000);

       			$("#name").keyup(function(event) {
        		validateInputs();
   				 });

 				$("#purpose").keyup(function(event) {
        		validateInputs();
   				 });
				  
				    $("#calendar").change(function(event) {
        validateInputs();
   				 });
				    $("#studid").keyup(function(event) {
        validateInputs();
   				 });
				    $("#course").change(function(event) {
        validateInputs();
   				 });
				     $("#purpose").change(function(event) {
        validateInputs();
   				 });
				     $("#others1").keyup(function(event) {
        validateInputs();
   				 });
				     $('#proceedbtn').attr('disabled', true);

       		function validateInputs(){
       			var disablebtn = false;
       			 var name1 = $('#name').val();
       			 
       			 var calendar1 = $('#calendar').val();
       			 var studid1 = $('#studid').val();
       			 var course1 = $('#course').val();
       			 var purpose1 = $('#purpose').val();
       			 var others11 = $('#others1').val();

       			
       			  if( $('#purpose').val() == "Others" )
       			 {
       			 	if(others11 == 0 || name1.length == 0 || calendar1.length < 10 || studid1.length == 0 || course1.length == 0 ){
       			 		$('#proceedbtn').attr('disabled', true);
       			 	}
       			 	else
       			 {
       			 	$('#proceedbtn').attr('disabled', false);
       			 	
       			 }

       			 }
       			 else{

       			 if(name1.length == 0 || calendar1.length < 10 || studid1.length == 0 || course1.length == 0 || $('#purpose').val() == "Select Purpose" ){
       			 	 $('#proceedbtn').attr('disabled', true);
       			 	 
       			 }
       			 else
       			 {
       			 	$('#proceedbtn').attr('disabled', false);
       			 	
       			 }

       			}
       		}
    			
			}

	else if( $(this).val() == "Change/Add Subject"	) {
    			$('#calendar').val('');
    			$('#year').val('');
	       		$('#studid').val('');
	       		$('#course').val('Select Course');
	       		$('#purpose').val('Select Purpose');
	       		$('#name').val('');
	       		$('#year').val('Select Year');
	       		$('#certofs').val('');
    			$('#studid').prop( "disabled", false );
    			$('#year').prop( "disabled", false );
    			$('#course').prop( "disabled", false );
    			$("one").fadeOut();
    			$('#year').attr("style", "pointer-events: auto;");
    			$("#calendar").attr('readonly', 'readonly');
    			$("#studcoursefade").fadeIn(1000);
    			$("#purposes").fadeOut(1000);
    			$("#certof").fadeOut(1000);
       		$("#yearfade").fadeIn(1000);

       			$("#name").keyup(function(event) {
        		validateInputs();
   				 });

 				$("#purpose").keyup(function(event) {
        		validateInputs();
   				 });
				  
				    $("#calendar").change(function(event) {
        validateInputs();
   				 });
				    $("#studid").keyup(function(event) {
        validateInputs();
   				 });
				    $("#course").change(function(event) {
        validateInputs();
   				 });
				     $("#purpose").change(function(event) {
        validateInputs();
   				 });
				     $("#others1").keyup(function(event) {
        validateInputs();
   				 });
				     $("#year").change(function(event) {
        validateInputs();
   				 });
				     $('#proceedbtn').attr('disabled', true);

       		function validateInputs(){
       			var disablebtn = false;
       			 var name1 = $('#name').val();
       			 var calendar1 = $('#calendar').val();
       			 var studid1 = $('#studid').val();
       			 var course1 = $('#course').val();
       			 var purpose1 = $('#purpose').val();
       			 var others11 = $('#others1').val();
       			
       			 if(name1.length == 0 || calendar1.length < 10 || studid1.length == 0 || $('#course').val() == "Select Course" || $('#year').val() == "Select Year"  ){
       			 	 $('#proceedbtn').attr('disabled', true);
       			 	 
       			 }
       			 else
       			 {
       			 	$('#proceedbtn').attr('disabled', false);
       			 	
       			 }

       			
       		}
    			
			}


    else if( $(this).val() == "TOR"	) {
    			$('#calendar').val('');
    			$('#year').val('');
	       		$('#studid').val('');
	       		$('#course').val('Select Course');
	       		$('#purpose').val('Select Purpose');
	       		$('#name').val('');
	       		$('#certofs').val('');
    			$('#studid').prop( "disabled", false );
    			$('#year').prop( "disabled", true );
    			$('#course').prop( "disabled", false );
    			document.getElementById('year').value = document.getElementById('4th').value;
    			$('#year').attr("style", "pointer-events: display;");
    			$("one").fadeOut();
    			$("#calendar").attr('readonly', 'readonly');
    			$("#studcoursefade").fadeIn(1000);
    			$("#certof").fadeOut(1000);
    			$("#purposes").fadeIn(1000);
    			$("#other").fadeOut(1000);
       		$("#yearfade").fadeIn(1000);

       			$("#name").keyup(function(event) {
        		validateInputs();
   				 });

 				$("#purpose").keyup(function(event) {
        		validateInputs();
   				 });
				    $("#calendar").change(function(event) {
        validateInputs();
   				 });
				    $("#studid").keyup(function(event) {
        validateInputs();
   				 });
				    $("#course").change(function(event) {
        validateInputs();
   				 });
				     $("#purpose").change(function(event) {
        validateInputs();
   				 });
				     $("#others1").keyup(function(event) {
        validateInputs();
   				 });
				     $('#proceedbtn').attr('disabled', true);

       		function validateInputs(){
       			var disablebtn = false;
       			 var name1 = $('#name').val();
       			 var calendar1 = $('#calendar').val();
       			 var studid1 = $('#studid').val();
       			 var course1 = $('#course').val();
       			 var purpose1 = $('#purpose').val();
       			 var others11 = $('#others1').val();

       			
       			  if( $('#purpose').val() == "Others" )
       			 {
       			 	if(others11 == 0 || name1.length == 0 || calendar1.length < 10 || studid1.length == 0 || course1.length == 0 ){
       			 		$('#proceedbtn').attr('disabled', true);
       			 	}
       			 	else
       			 {
       			 	$('#proceedbtn').attr('disabled', false);
       			 	
       			 }

       			 }
       			 else{

       			 if(name1.length == 0 || calendar1.length < 10 || studid1.length == 0 || course1.length == 0 || $('#purpose').val() == "Select Purpose" ){
       			 	 $('#proceedbtn').attr('disabled', true);
       			 	 
       			 }
       			 else
       			 {
       			 	$('#proceedbtn').attr('disabled', false);
       			 	
       			 }

       			}
       		}
    			
			}

			else if( $(this).val() == "Cert of" ) {
    		$('#calendar').val('');
    		$('#year').val('Select Year');
       		$('#studid').val('');
       		$('#course').val('Select Course');
       		$('#purpose').val('Select Purpose');
       		$('#name').val('');
       		$('#certofs').val('');
       		$('#others').val('');
       		$('#year').attr("style", "pointer-events: display;");
       		$('#year').prop( "disabled", false );
       		$('#purpose').val('Select Purpose');
    			$('#studid').prop( "disabled", false );
    			$('#course').prop( "disabled", false );
    			$("one").fadeOut()	;
    			
    			$("#calendar").attr('readonly', 'readonly');
    			$("#studcoursefade").fadeIn(1000);
    			$("#certof").fadeIn(1000);
    			$("#truecopy").fadeOut(1000);
    			$("#other").fadeOut(1000);
    			$("#purposes").fadeIn(1000);
       		$("#yearfade").fadeIn(1000);

       			$("#name").keyup(function(event) {
        		validateInputs();
   				 });

 				$("#purpose").keyup(function(event) {
        		validateInputs();
   				 });
				    $("#calendar").change(function(event) {
        validateInputs();
   				 });
				    $("#studid").keyup(function(event) {
        validateInputs();
   				 });
				    $("#course").change(function(event) {
        validateInputs();
   				 });
				    $("#purpose").change(function(event) {
        validateInputs();
   				 });
				    $("#certofs").keyup(function(event) {
        validateInputs();
   				 });
				    $("#others1").keyup(function(event) {
        validateInputs();
   				 });
				    $("#year").change(function(event) {
        validateInputs();
   				 });
				     $('#proceedbtn').attr('disabled', true);

       		function validateInputs(){
       			var disablebtn = false;
       			 var name1 = $('#name').val();
       			 var calendar1 = $('#calendar').val();
       			 var studid1 = $('#studid').val();
       			 var course1 = $('#course').val();
       			 var purpose1 = $('#purpose').val();
       			 var certofs1 = $('#certofs').val();
       			 var others11 = $('#others1').val();


       			 if( $('#purpose').val() == "Others" )
       			 {
       			 	if(others11 == 0 || name1.length == 0 || calendar1.length < 10 || studid1.length == 0 || $('#course').val() == "Select Course" || $('#purpose').val() == "Select Purpose" || $('#year').val() == "Select Year" || certofs1.length == 0){
       			 		$('#proceedbtn').attr('disabled', true);
       			 	}
       			 	else
       			 {
       			 	$('#proceedbtn').attr('disabled', false);
       			 	
       			 }

       			 }
       			 else{

       			 if(name1.length == 0 || calendar1.length < 10 || studid1.length == 0 || $('#course').val() == "Select Course" || $('#purpose').val() == "Select Purpose" || $('#year').val() == "Select Year" || certofs1.length == 0){
       			 	 $('#proceedbtn').attr('disabled', true);
       			 	 
       			 }
       			 else
       			 {
       			 	$('#proceedbtn').attr('disabled', false);
       			 	
       			 }

       			}
       		}
    			
			}

			else if( $(this).val() == "Certificate True Copy" ) {
    			$('#calendar').val('');
    			$('#year').val('Select Year');
	       		$('#studid').val('');
	       		$('#course').val('Select Course');
	       		$('#purpose').val('Select Purpose');
	       		$('#name').val('');
	       		$('#certofs').val('');
	       		$('#truecopy').val('');
    			$('#studid').prop( "disabled", false );
    			$('#course').prop( "disabled", false );
    			$("one").fadeOut();
    			$('#year').attr("style", "pointer-events: auto;");
    			$("#certof").fadeOut(1000);
    			$('#year').prop( "disabled", false );
    			$("#other").fadeOut(1000);
    			$("#studcoursefade").fadeIn(1000);
    			$("#truecopy").fadeIn(1000);
    			$("#purposes").fadeIn(1000);
       		$("#yearfade").fadeIn(1000);

       			$("#name").keyup(function(event) {
        		validateInputs();
   				 });

 				$("#purpose").keyup(function(event) {
        		validateInputs();
   				 });
				    $("#calendar").change(function(event) {
        validateInputs();
   				 });
				    $("#studid").keyup(function(event) {
        validateInputs();
   				 });
				    $("#course").change(function(event) {
        validateInputs();
   				 });
				     $("#purpose").change(function(event) {
        validateInputs();
   				 });
				    $("#truecopys").keyup(function(event) {
        validateInputs();
   				 });
				     $("#year").change(function(event) {
        validateInputs();
   				 });
				    $("#others1").keyup(function(event) {
        validateInputs();
        		});
				     $('#proceedbtn').attr('disabled', true);

       		function validateInputs(){
       			var disablebtn = false;
       			 var name1 = $('#name').val();
       			 var calendar1 = $('#calendar').val();
       			 var studid1 = $('#studid').val();
       			 var course1 = $('#course').val();
       			 var purpose1 = $('#purpose').val();
       			 var truecopys1 = $('#truecopys').val();
       			 var others11 = $('#others1').val();
       			
       			 if( $('#purpose').val() == "Others" )
       			 {
       			 	if(others11 == 0 || name1.length == 0 || calendar1.length < 10 || studid1.length == 0 || $('#course').val() == "Select Course" || $('#purpose').val() == "Select Purpose" || $('#year').val() == "Select Year"   || truecopys1.length == 0){
       			 		$('#proceedbtn').attr('disabled', true);
       			 	}
       			 	else
       			 {
       			 	$('#proceedbtn').attr('disabled', false);
       			 	
       			 }

       			 }
       			 else{

       			 if(name1.length == 0 || calendar1.length < 10 || studid1.length == 0 || $('#course').val() == "Select Course" || $('#purpose').val() == "Select Purpose" || $('#year').val() == "Select Year"  || truecopys1.length == 0){
       			 	 $('#proceedbtn').attr('disabled', true);
       			 	 
       			 }
       			 else
       			 {
       			 	$('#proceedbtn').attr('disabled', false);
       			 	
       			 }

       			}
       		}
    			
			}

			else if( $(this).val() == "Enrollment" ) {
				$('#year').prop( "disabled", false );
    			$('#calendar').val('');
    			$('#year').val('Select Year');
	       		$('#studid').val('');
	       		$('#course').val('Select Course');
	       		$('#purpose').val('Select Purpose');
	       		$('#name').val('');
	       		$('#certofs').val('');
	       		$('#truecopys').val('');
	       		$('#others').val('');
	       		$('#year').attr("style", "pointer-events: auto;");
	       		$("#purposes").fadeOut(1000);
       			$("#other").fadeOut(1000);
    			$('#studid').prop( "disabled", false );
    			$('#course').prop( "disabled", false );
    			$("#calendar").attr('readonly', 'readonly');
    			$("#certof").fadeOut(1000);
    			$("#truecopy").fadeOut(1000);
    			$("#studcoursefade").fadeIn(1000);
    			
       		$("#yearfade").fadeIn(1000);

       			$("#name").keyup(function(event) {
        		validateInputs();
   				 });

 				$("#purpose").keyup(function(event) {
        		validateInputs();
   				 });
				    $("#calendar").change(function(event) {
        validateInputs();
   				 });
				    $("#studid").keyup(function(event) {
        validateInputs();
   				 });
				    $("#course").change(function(event) {
        validateInputs();
   				 });
				     $("#year").change(function(event) {
        validateInputs();
        		});

				     $('#proceedbtn').attr('disabled', true);

       		function validateInputs(){
       			var disablebtn = false;
       			 var name1 = $('#name').val();
       			 var calendar1 = $('#calendar').val();
       			 var studid1 = $('#studid').val();
       			 var course1 = $('#course').val();
       			 var purpose1 = $('#purpose').val();
       			 var others1 = $('#others').val();
       			 var others11 = $('#others1').val();
       			 var year1 = $('#year').val();

       			 if(name1.length == 0 || calendar1.length < 10 || studid1.length == 0 || $('#course').val() == "Select Course"  || $('#year').val() == "Select Year"){
       			 	 $('#proceedbtn').attr('disabled', true);
       			 	 
       			 }
       			 else
       			 {
       			 	$('#proceedbtn').attr('disabled', false);
       			 	
       			 }

       			
       		}
    			
			}

			else if( $(this).val() == "Others" ) {
    			$('#calendar').val('');
    			$('#year').val('Select Year');
	       		$('#studid').val('');
	       		$('#course').val('Select Course');
	       		$('#purpose').val('Select Purpose');
	       		$('#name').val('');
	       		$('#certofs').val('');
	       		$('#truecopys').val('');
	       		$('#others').val('');
       			$("#other").fadeIn(1000);
       			$('#year').prop( "disabled", false );
    			$('#studid').prop( "disabled", false );
    			$('#course').prop( "disabled", false );
    			$('#year').attr("style", "pointer-events: auto;");
    			$("#calendar").attr('readonly', 'readonly');
    			$("#certof").fadeOut(1000);
    			$("#truecopy").fadeOut(1000);
    			$("#studcoursefade").fadeIn(1000);
    			
    			$("#purposes").fadeIn(1000);
       		$("#yearfade").fadeIn(1000);

       			$("#name").keyup(function(event) {
        		validateInputs();
   				 });

 				$("#purpose").keyup(function(event) {
        		validateInputs();
   				 });
				    $("#calendar").change(function(event) {
        validateInputs();
   				 });
				    $("#studid").keyup(function(event) {
        validateInputs();
   				 });
				    $("#course").change(function(event) {
        validateInputs();
   				 });
				      $("#purpose").change(function(event) {
        validateInputs();
   				 });
				    $("#truecopys").keyup(function(event) {
        validateInputs();
   				 });
				    $("#others1").keyup(function(event) {
        validateInputs();
        		});
				     $("#others").keyup(function(event) {
        validateInputs();
        		});
				     $("#year").change(function(event) {
        validateInputs();
        		});

				     $('#proceedbtn').attr('disabled', true);

       		function validateInputs(){
       			var disablebtn = false;
       			 var name1 = $('#name').val();
       			 var calendar1 = $('#calendar').val();
       			 var studid1 = $('#studid').val();
       			 var course1 = $('#course').val();
       			 var purpose1 = $('#purpose').val();
       			 var others1 = $('#others').val();
       			 var others11 = $('#others1').val();
       			 var year1 = $('#year').val();

       			
       			 if( $('#purpose').val() == "Others" )
       			 {
       			 	if(others11 == 0 || name1.length == 0 || calendar1.length < 10 || studid1.length == 0 || $('#course').val() == "Select Course" || purpose1.length == 0 || others1.length == 0 || $('#year').val() == "Select Year"  ){
       			 		$('#proceedbtn').attr('disabled', true);
       			 	}
       			 	else
       			 {
       			 	$('#proceedbtn').attr('disabled', false);
       			 	
       			 }

       			 }
       			 else{

       			 if(name1.length == 0 || calendar1.length < 10 || studid1.length == 0 || $('#course').val() == "Select Course"  || $('#purpose').val() == "Select Purpose" || others1.length == 0 || $('#year').val() == "Select Year"){
       			 	 $('#proceedbtn').attr('disabled', true);
       			 	 
       			 }
       			 else
       			 {
       			 	$('#proceedbtn').attr('disabled', false);
       			 	
       			 }

       			}
       		}
    			
			}


    else {
    		$('#year').val('');
       		$('#studid').val('');
       		$('#course').val('');
       		$('#calendar').val('')
       		$('#name').val('');
       		$('#certofs').val('');
       		$('#others').val('');
      $("#calendar").attr('readonly', 'readonly');
      $('#studid').prop( "disabled", false );
      $('#year').prop( "disabled", false );
      $('#course').prop( "disabled", false );
      $('#course').val('Select Course');
      $('#year').val('Select Year');
      $('#calendar').prop( "disabled", false );
      $('#year').attr("style", "pointer-events: auto;");
      $("#purposes").fadeIn(1000);
      $("#other").fadeOut(1000);
      $("#truecopy").fadeOut(1000);
      $("one").fadeOut();
      $("#studcoursefade").fadeIn(1000);
       		$("#yearfade").fadeIn(1000);
       		$("#certof").fadeOut(1000);
       		$("#year").change(function(event) {
        validateInputs();
   				 });
       		$("#name").keyup(function(event) {
        		validateInputs();
   				 });
 
				    $("#calendar").change(function(event) {
        validateInputs();
   				 });
				    $("#studid").keyup(function(event) {
        validateInputs();
   				 });
				    $("#course").change(function(event) {
        validateInputs();
   				 });
				    $("#year").change(function(event) {
        validateInputs();
   				 });
				    
				     $('#proceedbtn').attr('disabled', true);
				     
       		function validateInputs(){
       			var disablebtn = false;
       			 var name1 = $('#name').val();
       			 var calendar1 = $('#calendar').val();
       			 var studid1 = $('#studid').val();
       			 var course1 = $('#course').val();
       			 var year1 = $('#year').val();
       			 var purpose1 = $('#purpose').val();
       			 
       			 if(name1.length == 0 || calendar1.length == 0 || studid1.length == 0 || course1.length == 0 || $('#year').val() == "Select Year"|| purpose1 == 0){
       			 	 $('#proceedbtn').attr('disabled', true);
       			 	 
       			 }
       			 else
       			 {
       			 	$('#proceedbtn').attr('disabled', false);
       			 	
       			 }
       		}
    			
    }
  });
 
});
</script>
<!-- Side Press Disabler -->
<script >
	   $(document).ready(function () {
    $('#Notemodal').modal({
           backdrop: 'static',
           keyboard: false
    })
    $('#Refmodal').modal({
           backdrop: 'static',
           keyboard: false
         })
    $('#ValidateModal').modal({
           backdrop: 'static',
           keyboard: false
         })		
   });
</script>
<!-- Button Disabler -->
<script>
$(document).ready(function(){
	$('input[id="proceedbtn"]').attr('disabled',true);
	$('input[id="name"]').on('keyup',function(){
		if($(this).val() ==''{
			$('input[id="proceedbtn"]').attr('disabled', true)
		}
		else{
			$('input[id="proceedbtn"]').attr('disabled', false)
		}
	});
	});
</script>
<!-- Data passer in referrence modal -->

<script>	
	$(document).ready(function(){
    $('#selection').on('change', function() {
      if ( this.value == 'Registration')
      {
        document.getElementById('refpassbtn1').onclick = function(){
        $("#hidden_div").hide();
        $("#hidden_div1").hide();
         document.getElementById('passcalendar').value = document.getElementById('calendar').value;
         document.getElementById('passname').value = document.getElementById('name').value;
         document.getElementById('passappoint').value = document.getElementById('selection').value;
		 document.getElementById('passrefnum').value = document.getElementById('refnum').value;
		}

      }
      else if(this.value == 'Enrollment' || this.value == 'Change/Add Subject'   ){
      	$("#hidden_div").show();
         $("#hidden_div1").hide();
         document.getElementById('refpassbtn1').onclick = function(){
         document.getElementById('passcourse').value = document.getElementById('course').value;
         document.getElementById('passrefnum').value = document.getElementById('refnum').value;
         document.getElementById('passstudid').value = document.getElementById('studid').value;
        document.getElementById('passyear').value = document.getElementById('year').value + " Year"; 
        document.getElementById('passname').value = document.getElementById('name').value;
        document.getElementById('passcalendar').value = document.getElementById('calendar').value;
        document.getElementById('passappoint').value = document.getElementById('selection').value;

    }
      }

      else if(this.value == 'Grades' || this.value == 'Diploma' || this.value == 'Certificate of Good Moral Character' || this.value == 'TOR' || this.value == 'Certificate of Transfer Credentials'  ){
      	$("#hidden_div").show();
         $("#hidden_div1").show();
         document.getElementById('refpassbtn1').onclick = function(){
         	if($('#purpose').val() == "Others"){
         		document.getElementById('passpurpose').value = document.getElementById('others1').value;
         		document.getElementById('passcourse').value = document.getElementById('course').value;
		        document.getElementById('passrefnum').value = document.getElementById('refnum').value;
		        document.getElementById('passstudid').value = document.getElementById('studid').value;
		        document.getElementById('passyear').value = document.getElementById('year').value + " Year"; 
		        document.getElementById('passname').value = document.getElementById('name').value;
		        document.getElementById('passcalendar').value = document.getElementById('calendar').value;
		        document.getElementById('passappoint').value = document.getElementById('selection').value;

         	}
         	else{


         		document.getElementById('passpurpose').value = document.getElementById('purpose').value;
         		document.getElementById('passcourse').value = document.getElementById('course').value;
		        document.getElementById('passrefnum').value = document.getElementById('refnum').value;
		        document.getElementById('passstudid').value = document.getElementById('studid').value;
		        document.getElementById('passyear').value = document.getElementById('year').value + " Year"; 
		        document.getElementById('passname').value = document.getElementById('name').value;
		        document.getElementById('passcalendar').value = document.getElementById('calendar').value;
		        document.getElementById('passappoint').value = document.getElementById('selection').value;

         	}
         }


      }

       else if(this.value == 'Cert of' ){
       	$("#hidden_div").show();
         $("#hidden_div1").show();
          document.getElementById('refpassbtn1').onclick = function(){

          	if($('#purpose').val() == "Others"){
         		document.getElementById('passpurpose').value = document.getElementById('others1').value;
         		document.getElementById('passcourse').value = document.getElementById('course').value;
		        document.getElementById('passrefnum').value = document.getElementById('refnum').value;
		        document.getElementById('passstudid').value = document.getElementById('studid').value;
		        document.getElementById('passyear').value = document.getElementById('year').value + " Year"; 
		        document.getElementById('passname').value = document.getElementById('name').value;
		        document.getElementById('passcalendar').value = document.getElementById('calendar').value;
		        document.getElementById('passappoint').value = "Cert of " + document.getElementById('certofs').value ;

         	}
         	else{

         		document.getElementById('passpurpose').value = document.getElementById('purpose').value;
         		document.getElementById('passcourse').value = document.getElementById('course').value;
		        document.getElementById('passrefnum').value = document.getElementById('refnum').value;
		        document.getElementById('passstudid').value = document.getElementById('studid').value;
		        document.getElementById('passyear').value = document.getElementById('year').value + " Year"; 
		        document.getElementById('passname').value = document.getElementById('name').value;
		        document.getElementById('passcalendar').value = document.getElementById('calendar').value;
		        document.getElementById('passappoint').value = "Cert of " + document.getElementById('certofs').value ;

         	}

          }


       }
       else if(this.value == 'Certificate True Copy' ){
       	$("#hidden_div").show();
         $("#hidden_div1").show();
          document.getElementById('refpassbtn1').onclick = function(){

          	if($('#purpose').val() == "Others"){
         		document.getElementById('passpurpose').value = document.getElementById('others1').value;
         		document.getElementById('passcourse').value = document.getElementById('course').value;
		        document.getElementById('passrefnum').value = document.getElementById('refnum').value;
		        document.getElementById('passstudid').value = document.getElementById('studid').value;
		        document.getElementById('passyear').value = document.getElementById('year').value + " Year"; 
		        document.getElementById('passname').value = document.getElementById('name').value;
		        document.getElementById('passcalendar').value = document.getElementById('calendar').value;
		        document.getElementById('passappoint').value = "Certificate True Copy ( " + document.getElementById('truecopys').value+" )sets " ;

         	}
         	else{

         		document.getElementById('passpurpose').value = document.getElementById('purpose').value;
         		document.getElementById('passcourse').value = document.getElementById('course').value;
		        document.getElementById('passrefnum').value = document.getElementById('refnum').value;
		        document.getElementById('passstudid').value = document.getElementById('studid').value;
		        document.getElementById('passyear').value = document.getElementById('year').value + " Year"; 
		        document.getElementById('passname').value = document.getElementById('name').value;
		        document.getElementById('passcalendar').value = document.getElementById('calendar').value;
		        document.getElementById('passappoint').value = "Certificate True Copy ( " + document.getElementById('truecopys').value+" )sets " ;


         	}

          }


       }

       else if(this.value == 'Others' ){
       	$("#hidden_div").show();
         $("#hidden_div1").show();
          document.getElementById('refpassbtn1').onclick = function(){

          	if($('#purpose').val() == "Others"){
         		document.getElementById('passpurpose').value = document.getElementById('others1').value;
         		document.getElementById('passcourse').value = document.getElementById('course').value;
		        document.getElementById('passrefnum').value = document.getElementById('refnum').value;
		        document.getElementById('passstudid').value = document.getElementById('studid').value;
		        document.getElementById('passyear').value = document.getElementById('year').value + " Year"; 
		        document.getElementById('passname').value = document.getElementById('name').value;
		        document.getElementById('passcalendar').value = document.getElementById('calendar').value;
		        document.getElementById('passappoint').value = "Others: " + document.getElementById('others').value ;

         	}
         	else{

         		document.getElementById('passpurpose').value = document.getElementById('purpose').value;
         		document.getElementById('passcourse').value = document.getElementById('course').value;
		        document.getElementById('passrefnum').value = document.getElementById('refnum').value;
		        document.getElementById('passstudid').value = document.getElementById('studid').value;
		        document.getElementById('passyear').value = document.getElementById('year').value + " Year"; 
		        document.getElementById('passname').value = document.getElementById('name').value;
		        document.getElementById('passcalendar').value = document.getElementById('calendar').value;
		        document.getElementById('passappoint').value = "Others: " + document.getElementById('others').value ;


         	}

          }


       }

      else{

      	$("#hidden_div").show();
         $("#hidden_div1").show();
      }
      



    });
});
</script>
<!-- auto hypen in student id-->
<script>
	function addHyphen (element) {
    	let ele = document.getElementById(element.id);
        ele = ele.value.split('-').join('');    // Remove dash (-) if mistakenly entered	
        let finalVal = ele.match(/.{1,4}/g).join('-');
        document.getElementById(element.id).value = finalVal;
    }
</script>
<!-- Show Hide Div in Referrence Side-->
<script>
	$(document).ready(function(){
    $('#selection').on('change', function() {
      if ( this.value == 'Registration')
      {
        $("#hidden_div").hide();
      }
      else if(this.value == 'Enrollment' || this.value == 'Change/Add Subject'   ){
      	$("#hidden_div").show();
         $("#hidden_div1").hide();
      }
      else{

      	$("#hidden_div").show();
         $("#hidden_div1").show();


      }
      



    });
});
</script>
<!-- Button Enable when checked in Notemodal -->
<script>
	$(document).ready(function() {
    var chkbox = $("#chkbox");

    chkbox.click(function() {
        if ($(this).is(":checked")) {

            $("#refpassbtn").removeAttr("disabled");
        } else {
            $("#refpassbtn").attr("disabled", "disabled");

        }
    });
}); 

</script>
</script>
<!-- Button Enable when checked in Dataprivacy Act -->
<script>
	$(document).ready(function() {
    var chkbox = $("#chkbox1");

    chkbox.click(function() {
        if ($(this).is(":checked")) {

            $("#refpassbtn1").removeAttr("disabled");
        } else {
            $("#refpassbtn1").attr("disabled", "disabled");

        }
    });
}); 

</script>
<script>
	var $empties = $('#calendar, #selection', '#name').filter(function(){
    return $.trim($(this).val()).length == 0
})

$('#proceedbtn').prop("disabled", $empties.length === 0);
</script>
<script>
	$('input').on('keyup', isValid);

function isValid() {
    let requiredInputs = $('input[required]');
  let emptyField = false;
  $.each(requiredInputs, function() {
    if( $(this).val().trim().length == 0 ) {
        emptyField = true;
        return false;
    }
  });
  if(!emptyField) {
    $('#proceedbtn').attr('disabled', false);
  }else{
    $('#proceedbtn').attr('disabled', true);
  }
}
</script>
</head>
<body>
<!-- Main Body -->
<!-- Pop up COVID Prevention Message -->
<div id="myModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Pop up Header -->
			<div class="modal-header bg-primary">
				<h4 class="modal-title  text-white">COVID Prevention</h4>
				<button type="button" class="btn btn-primary" data-bs-dismiss="modal">X</button>
			</div>
			<!-- Pop up Body -->
			<div class="modal-body align-items-center">
				<img src="covid19.jpg" class="img-fluid" >
			</div>
			<!-- Pop up Footer -->
			<div class="modal-footer">
				
				<p> CCC Admin</p>
			</div>
		</div>
	</div>
</div>


	<div class="main div p-5 bg-danger" "style = "background-color: #164221;">
			<div class="card p-5 shadow-sm p-3 mb-5 bg-body rounded align-items-center shadow-lg p-3 mb-5 rounded">

				<img src="ccc.png" width="120" height="120" class="img-fluid" >
				<h1>CCC Online Registrar Appointment System</h1>
				
				<h2 class="p-5">Setting up Schedule</h2>
				<div class="container p-5 shadow-lg p-3 mb-5 bg-white rounded">
					<div class="row">
						<div class="col-6 p-2">

						<h2>Scheduling</h2>

						<form id="infoadd" action="appointadd.php" method="post">
						<p>Type of Appointment:</p>
						<select id="selection" name="appointment" class="form-select" aria-label="Default select example" autocomplete="off" onchange="success1()" >
							  <option selected>Select Appointment</option>
							  <option value="TOR">T.O.R</option>
							  <option value="Change/Add Subject">Change/Add Subject</option>
							  <option value="Grades">Grades</option>
							  <option value="Enrollment">Enrollment</option>
							  <option value="Diploma">Diploma</option>
							  <option value="Certificate of Transfer Credentials">Certificate of Transfer Credentials</option>
							  <option value="Certificate of Good Moral Character">Certificate of Good Moral Character</option>
							  <option value="Cert of">Certificate of : (Please Specify)</option>
							  <option value="Certificate True Copy">Certificate True Copy (Please Specify: Sets)</option>
							  <option value="Others">Others</option>


							</select>

							<div id="other">
							<p>Please Specify What Appointment :<small class="text-danger font-weight-bold"> *</small></p> <input id="others" name="others" type="text" oninput="this.value = this.value.toUpperCase()"  />	
						</div>


						
							<div id="certof">
							<p>Please Specify What Certificate:<small class="text-danger font-weight-bold"> *</small></p> <input id="certofs" name="name" type="text" oninput="this.value = this.value.toUpperCase()"  />	
						</div>

						<div id="truecopy">
							<p>Please Specify how many sets:<small class="text-danger font-weight-bold"> *</small></p> <input id="truecopys" name="name" type="number" oninput="this.value = this.value.toUpperCase()"  />	
						</div>


						<div id="purposes">  
							<p>Purpose:</p>
							<select id="purpose" name="purpose" class="form-select" aria-label="Default select example" autocomplete="off" onchange="success1()" >
							  <option selected>Select Purpose</option>
							  <option value="Employment Local/Abroad">Employment Local/Abroad</option>
							  <option value="Board Examination">Board Examination</option>
							  <option value="Visa Application">Visa Application</option>
							  <option value="CAV">CAV</option>
							  <option value="Personal File">Personal File</option>
							  <option value="Transfer/Evaluation">Transfer/Evaluation</option>
							  <option value="Others">Others:(Please Specify)</option>

							</select>
							<div id="other1">
							<p>Please Specify What Purpose :<small class="text-danger font-weight-bold"> *</small></p> <input id="others1" name="name" type="text" oninput="this.value = this.value.toUpperCase()"  />	
						</div>
							</div>
						<p>Date of Appointment:<small class="text-danger font-weight-bold"> *</small></p><input id="calendar" type="text" autocomplete="off" name="calendar" />	
						<input type="number" id="refnum" name="refnum" value="<?php echo $random?>" style="display: none;" />
						
						

						</div>
						
						<div class="col-6 p-2">
						<h2>Details</h2>
						<div id ="studcoursefade">
						<p>Student ID:<small class="text-danger font-weight-bold"> *</small></p> <input type="text" id="studid" onkeyup="addHyphen(this)" name="studentid" placeholder="0000-0000" />	
						<p>Course:</p>
						<select id="course" name="course" class="form-select" aria-label="Default select example"  >
							  <option selected>Select Course</option>
							  <option value="BSIT">BSIT</option>
							  <option value="BSED">BSED</option>
							  <option value="BEED">BEED</option>
							  <option value="BSHRM">BSHRM</option>
							  <option value="BSHM">BSHM</option>
							  <option value="BA-POLSCI">Ba-Polsci</option>
							</select>
						</div>
						<p>Name: Format(Last, First, Middle)<small class="text-danger font-weight-bold"> *</small></p> <input id="name" name="name" type="text" oninput="this.value = this.value.toUpperCase()" />
						<div id="yearfade">
						<p>Year:</p>
						<select id="year" name="year" class="form-select" aria-label="Default select example" style="display: block"  readonly>
							  <option selected>Select Year</option>
							  <option value="1st">1st Year</option>
							  <option value="2nd">2nd Year</option>
							  <option value="3rd">3rd Year</option>
							  <option id="4th" value="4th">4th Year</option>
							</select>
						</div>
					</div>
				</div>

				</div>
				<!-- What to bring Modal -->

				<button type="button" id="proceedbtn" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Privacymodal" disabled="disabled" >
  Proceed
</button>
			</div>

		<!-- Data Privacy Modal -->
<div class="modal fade" id="Privacymodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white ">
        <h5 class="modal-title " >Data Privacy Act of 2018</h5>
      </div>
      
      <div class="modal-body">
      	<div class="border">
      		<div class="modal-body align-items-center">
				<img src="DataPrivacy.jpg" class="img-fluid" >
			</div>
      
      </div>
					<input class="form-check-input mt-2 " id="chkbox1" type="checkbox" value="" id="flexCheckDefault">
				 <strong><label class="mt-1 " for="chkbox">I have read all the information above</label></strong>
    </div>

      <div class="modal-footer">
      	<input type="button" class="btn btn-primary" onclick="$('#Privacymodal').modal('hide');" id="backbtn" value="<Back" ></input>
        <input type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Notemodal" id="refpassbtn1" value="Proceed" disabled="disabled"></input>

      </div>
    </div>
  </div>
</div>


			<!-- What to Bring Modal -->
<div class="modal fade" id="Notemodal" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success text-white ">
        <h5 class="modal-title " >What to Bring</h5>
      </div>
      
      <div class="modal-body">
      	<div class="border">
       <div class="container bg-primary text-white">
       	<h6 class="p-1"> For Any of the Appointments <small class = "text-white bg-dark fw-bold">(EXCEPT MENTION BELOW)</small></h6>
       </div>
       <p class = "px-2 m-0 mb-3">1. Bring 1 Valid School ID/ Valid ID</p>
       <div class="container bg-primary text-white">
       	<h6 class="p-1"> For Grade Appointment</h6>
       	</div>
       	<p class = "px-2 m-0">1. Bring 1 Valid School ID</p>
       	<p class = "px-2 m-0 mb-3">2. Bring your Grade Slip</p>
       
       <div class="container bg-primary text-white">
       	<h6 class="p-1"> For Registration Appointment</h6>
       	 </div>
       	<p class = "px-2 m-0">1. Bring 2x2 ID</p>
				<p class = "px-2 m-0">2. Bring Good Moral</p>
				<p class = "px-2 m-0 mb-3">3. Bring Previous Form 138 (Grade 12 Grade)</p>

		<div class="container bg-primary text-white">
       	<h6 class="p-1"> For Authorization/Unattended</h6>
       	 </div>
       	<p class = "px-2 m-0">1. Bring Authorization Letter</p>
				<p class = "px-2 m-0">2. Bring Valid ID</p>
      </div>
					<input class="form-check-input mt-2 " id="chkbox" type="checkbox" value="" id="flexCheckDefault">
				 <strong><label class="mt-1 " for="chkbox">I have read all the information above</label></strong>
    </div>

      <div class="modal-footer">
      	<input type="button" class="btn btn-primary" onclick="$('#Notemodal').modal('hide');" id="backbtn" value="<Back" ></input>
        <input type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Refmodal" id="refpassbtn" value="Proceed" disabled="disabled"></input>

      </div>
    </div>
  </div>
</div>
		<!-- Ref Modal -->
		<!-- Modal -->

<div class="modal fade  bg-white " id="Refmodal" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog shadow-lg p-3 mb-5 bg-white rounded">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title  " >CCC Appointment E-Ticket</h5>
      </div>
      
      <div class="modal-body">
      	<div class="border p-2">
       <div class="container bg-primary text-white">
       	<h6 class="p-1"> Instructions:</h6>
       </div>
       <p class = "p-0 m-0">1. Screenshot the Referrence along with the details</p>
       <p class = "font-weight-bold p-0 m-0">2. If you are not using mobile devices, please provide a printout of the screenshot.</p>
       <strong><h4 class = " text-danger text-center">OFFICE HOURS 8:00am - 5:00pm</h4></strong>
    		<div class="row ">
    			<div class="col-6">
       <h6 class = "px-2 mb-1"  > Name of the Student:</h6>
       <input class=" fw-bold px-2 m-0 modal-dialog shadow-sm mb-1 bg-white rounded" style="border:0; background-color: white; color: black; font-size:12px; width: 190px;height: 30px" id="passname" name="passname" type="text" readonly />
       <h6 class = "px-2 mb-1" > Scheduled Date:</h6>
       <input class=" fw-bold px-2 m-0 shadow-sm mb-1 bg-white rounded" style="border:0; background-color: white; color: black; font-size:15px; width: 190px;height: 30px" id="passcalendar" name="passcalendar" type="text" readonly  />
       <h6 class = "px-2 mb-1" > Appointment Type:   </h6>
       <input class="fw-bold px-2 m-0 shadow-sm mb-1 bg-white rounded" style="border:0; background-color: white; color: black; font-size:12px; width: 190px;height: 30px" id="passappoint" name="passapoint" type="text" readonly />
       <div id="hidden_div1">
       <h6 class = "px-2 mb-1" > Purpose:   </h6>
       <input class="fw-bold px-2 m-0 shadow-sm mb-1 bg-white rounded" style="border:0; background-color: white; color: black; font-size:15px; width: 190px;height: 30px" id="passpurpose" name="passpurpose" type="text" readonly  />
     </div>	
     </div>
     <div class="col-6">
     	<div id="hidden_div">
     	<h6 class = "px-2 mb-1" > Student ID:</h6>
       <input class="px-2 m-0 fw-bold shadow-sm mb-1 bg-white rounded" style="border:0; background-color: white; color: black; font-size:15px; width: 190px;height: 30px" id="passstudid" name="passstudid" type="text" readonly  />
       <h6 class = "px-2 mb-1" > Course:</h6>
       <input class=" fw-bold px-2 m-0 shadow-sm mb-1 bg-white rounded" style="border:0; background-color: white; color: black; font-size:15px; width: 190px;height: 30px" id="passcourse" name="passcourse" type="text" readonly />
       <h6 class = "px-2 mb-1" > Year:</h6>
       <input class=" fw-bold px-2 m-0 shadow-sm mb-1 bg-white rounded" style="border:0; background-color: white; color: black; font-size:15px; width: 190px;height: 30px" id="passyear" name="passyear" type="text" readonly	 />

     </div>
     		</div>
       	<h6 class="pb-3 m-0"> Referrence Number (Please copy):</h6>
       	<div class="justify-content-center text-center">
       	 <input class=" fw-bold text-center m-0 shadow-sm mb-1 bg-white rounded" style="border:0; background-color: white; color: black; font-size:35px; width: 200px;height: 30px" id="passrefnum" name="passrefnum" type="text" readonly />
      	</div>
      		</div>
      	</div>

      	
      </div>
<div class="modal-footer">
      	<input type="button" class="btn btn-primary" onclick="$('#Refmodal').modal('hide');" id="backbtn" value="<Back" ></input>
      <button type="submit" name="submit" class="btn btn-success">Proceed</button>
      </div>
    </div>

    </div>
  </div>
</div>
	</div>
</div>
</form>
<!-- Footer -->
<footer class="page-footer font-small blue bg-success">

  <!-- Copyright -->
  <div class="footer-copyright text-light text-center py-3">© 2021 Copyright: TR Software Service
  </div>
</footer>
</body>
</html>