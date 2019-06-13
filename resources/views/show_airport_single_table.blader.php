<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<br><h1>AIRPORT INFORMATION</h1><br>
  <div class="table-responsive">
    <?php
   $con= mysqli_connect('localhost','root','');
    mysqli_select_db($con,'air_crash');
    $sql="SELECT * FROM Airport";
    $records=mysqli_query($con,$sql);


     ?>
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>IATA</th>
         <th>ICAO</th>
         <th>Name</th>
         <th>Location</th>
       </tr>
      <?php

      while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['IATA']."</td>";
        echo "<td>".$ques['ICAO']."</td>";
        echo "<td>".$ques['Name']."</td>";
        echo "<td>".$ques['location']."</td>";
        echo "</tr>";
      }  
      ?>
     </table>
  </div>