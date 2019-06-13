<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<br><h1>Air Crash Survivors</h1><br>
  <div class="table-responsive">
    <?php
   $con= mysqli_connect('localhost','root','');
    mysqli_select_db($con,'air_crash');
    $sql="SELECT f_no, survivors FROM incident order by f_no asc";
    $records=mysqli_query($con,$sql);


     ?>
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>Flight No.</th>
         <th>Survivors</th>
       </tr>
      <?php

      while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['f_no']."</td>";
        echo "<td>".$ques['survivors']."</td>";
        echo "</tr>";
      }  

      ?>
     </table>
      <br/><br/>
    <?php
    
           

                $sql="SELECT SUM(survivors) FROM incident order by f_no asc";
                $records=mysqli_query($con,$sql);

                $row = mysqli_fetch_array($records);
                echo "<h1> Total Air Crash Survivors : ".$row['SUM(survivors)']."<h1>";
            
    

    ?>
  </div>