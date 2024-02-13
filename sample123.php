<!DOCTYPE html>
<?php
include('conn.php');
?>
<html>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"></script>
   <?php

    $query1 = "SELECT * FROM appointment WHERE statid = 3";
    $search_result1 = mysqli_query($con,$query1);
  ?>
<script>
	$(document).ready(function() {
    $('#Alldata3').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
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
<body>

 <table id ="Alldata3" cellspacing="5" cellpadding="5"    class=" display table table-striped border shadow-lg ">

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
  	<tfoot>
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
        echo "<td><strong><div class = 'bg-success rounded text-center text-white p-2'>"; echo "Done"; echo "</div></strong</td>";
        echo "<td style = 'width: 400px;'>"; echo $row["purpose"]; echo "</td>";
        echo "<td style = 'width: 400px;'>"; echo $row["name"]; echo "</td>";
        echo "</tr>";
        }
?>
  </tbody>
    
</tfoot>
</table>
</body>
</html>