<?php

if(isset($_GET['sub']))
{
    $con=mysqli_connect("localhost","root","") ;

    mysqli_select_db($con,"air_crash")  ;
        # code...
    $it=$_GET['iata'];
    $ic=$_GET['icao'];
    $n=$_GET['name'];
    $l=$_GET['loc'];
    
    $s="INSERT INTO Airport(IATA,ICAO,Name,location) VALUES ('$it','$ic','$n','$l');";
    $CC=mysqli_query($con,$s);
}




?>