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

  <br><h1>CRASH SITE INFORMATION</h1><br>
  <div class="table-responsive">
    <?php
   $con= mysqli_connect('localhost','root','');
    mysqli_select_db($con,'air_crash');
    $sql="SELECT * FROM incident order by f_no asc";
    $records=mysqli_query($con,$sql);


     ?>
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>Flight No.</th>
         <th>Incident site</th>
         <th>Summary</th>
         <th>Fatalities</th>
         <th>Survivors</th>
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

  <br><h1>OCCUPANT INFORMATION</h1><br>
  <div class="table-responsive">
    <?php
   $con= mysqli_connect('localhost','root','');
    mysqli_select_db($con,'air_crash');
    $sql="SELECT * FROM occupants order by f_no asc";
    $records=mysqli_query($con,$sql);


     ?>
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>Flight No.</th>
         <th>Passenger</th>
         <th>Crew</th>
       </tr>
      <?php

      while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['f_no']."</td>";
        echo "<td>".$ques['passenger']."</td>";
        echo "<td>".$ques['crew']."</td>";
        echo "</tr>";
      }  
      ?>
     </table>
  </div>

  <br><h1>AIRLINES INFORMATION</h1><br>
  <div class="table-responsive">
    <?php
   $con= mysqli_connect('localhost','root','');
    mysqli_select_db($con,'air_crash');
    $sql="SELECT * FROM Airlines order by name asc";
    $records=mysqli_query($con,$sql);


     ?>
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>IATA</th>
         <th>ICAO</th>
         <th>Callsign</th>
         <th>Name</th>
         <th>Country</th>
       </tr>
      <?php

      while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['IATA']."</td>";
        echo "<td>".$ques['ICAO']."</td>";
        echo "<td>".$ques['callsign']."</td>";
        echo "<td>".$ques['name']."</td>";
        echo "<td>".$ques['country']."</td>";
        echo "</tr>";
      }  
      ?>
     </table>
  </div>

  <br><h1>AIRPORT INFORMATION</h1><br>
  <div class="table-responsive">
    <?php
   $con= mysqli_connect('localhost','root','');
    mysqli_select_db($con,'air_crash');
    $sql="SELECT * FROM Airport order by Name asc";
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

  <br><h1>AIRCRAFT INFORMATION</h1><br>
  <div class="table-responsive">
    <?php
   $con= mysqli_connect('localhost','root','');
    mysqli_select_db($con,'air_crash');
    $sql="SELECT * FROM aircraft order by manufacturer asc";
    $records=mysqli_query($con,$sql);


     ?>
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>Type</th>
         <th>Manufacturer</th>
         <th>National Origin</th>
       </tr>
      <?php

      while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['Type']."</td>";
        echo "<td>".$ques['manufacturer']."</td>";
        echo "<td>".$ques['national_origin']."</td>";
        echo "</tr>";
      }  
      ?>
     </table>
  </div>