<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<br><h1>FLIGHT INFORMATION </h1><br>
  <div class="table-responsive">
    <?php
   $con= mysqli_connect('localhost','root','');
    mysqli_select_db($con,'air_crash');
    $sql="SELECT * FROM flight order by flight_no asc";
    $records=mysqli_query($con,$sql);


     ?>
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>Flight No.</th>
         <th>Origin</th>
         <th>Destination</th>
         <th>Status</th>
         <th>Date of incident</th>
       </tr>
      <?php

      while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['flight_no']."</td>";
        echo "<td>".$ques['origin']."</td>";
        echo "<td>".$ques['destination']."</td>";
        echo "<td>".$ques['stat']."</td>";
        echo "<td>".$ques['crash_date']."</td>";
        echo "</tr>";
      }  
      ?>
     </table>
  </div>