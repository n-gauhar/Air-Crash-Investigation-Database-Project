<?php


//header('location:index.php');
if(isset($_GET['submit']))

{$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'air_crash');


$fn = $_GET['f_no']; 
	$reg= "DELETE FROM flight WHERE flight_no=".$fn."";
	$s=mysqli_query($con,$reg);
    if($s){echo "<h1>Flight record deleted successfully!!!</h1><br>" ;}
    else echo "<h1>Unable to delete / No such record found </h1>";

}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<h1>delete flight info</h1>
      <form method="get">
        
          <label>Enter the flight no. you would like to delete</label>
          <input type="text" name="f_no" class="form-control">
        <button type="submit" name="submit" class="btn btn-success">Delete</button>
       </form><br><br><br>

</body>
</html>