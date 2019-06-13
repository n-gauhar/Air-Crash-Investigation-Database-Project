<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<br><h1>Flight Information</h1><br>
  <div class="table-responsive">
    <?php
   $con= mysqli_connect('localhost','root','');
    mysqli_select_db($con,'air_crash');

    $sql="SELECT DISTINCT (incident.f_no),flight.flight_no,flight.stat,incident.fatalities,incident.survivors FROM flight JOIN incident ON flight.flight_no=incident.f_no";
    $records=mysqli_query($con,$sql);
 
 
     ?>
     <table class="table table-hover table-dark">
       <tr class="header">
         <th>Flight No.</th>
         <th>Fatalities</th>
         <th>Survivors</th>
         <th>Status</th>
 
       </tr>
      <?php
 
      while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['flight_no']."</td>";
        echo "<td>".$ques['fatalities']."</td>";
        echo "<td>".$ques['survivors']."</td>";
        echo "<td>".$ques['stat']."</td>";
        echo "</tr>";
      }  
      ?>
     </table>
  </div>