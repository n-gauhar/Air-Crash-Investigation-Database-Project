<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<br><h1>Death by Air Crashes</h1><br>
  <div class="table-responsive">
    <?php
   $con= mysqli_connect('localhost','root','');
    mysqli_select_db($con,'air_crash');
    $sql="SELECT f_no, fatalities FROM incident order by f_no asc";
    $records=mysqli_query($con,$sql);


     ?>
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>Flight No.</th>
         <th>Fatalities</th>
       </tr>
      <?php

      while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['f_no']."</td>";
        echo "<td>".$ques['fatalities']."</td>";
        echo "</tr>";
      }  

      ?>
     </table>
      <br/><br/>
    <?php
    
           

                $sql="SELECT SUM(fatalities) FROM incident order by f_no asc";
                $records=mysqli_query($con,$sql);

                $row = mysqli_fetch_array($records);
                echo "<h1> Total Death by Air Crashes: ".$row['SUM(fatalities)']."<h1>";
            
    

    ?>
  </div>