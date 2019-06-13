<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<br><h1>Air Accidents where it crashed and no survivor</h1><br>
  <div class="table-responsive">
    <?php
   $con= mysqli_connect('localhost','root','');
    mysqli_select_db($con,'air_crash');
    $sql="SELECT * FROM incident i WHERE EXISTS (SELECT flight_no, stat FROM flight f WHERE i.survivors=0 AND f.stat='Crash')";
    $records=mysqli_query($con,$sql);


     ?>
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>Flight No.</th>
         <th>Incident site</th>
         <th>Summary</th>
         <th>Fatalities</th>
         <th>Survivor</th>
       </tr>
      <?php

      while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['f_no']."</td>";
        echo "<td>".$ques['site']."</td>";
        echo "<td>".$ques['summary']."</td>";
        echo "<td>".$ques['fatalities']."</td>";
        echo "<td>".$ques['survivors']."</td>";
        echo "</tr>";
      }  
      ?>
     </table>
  </div>