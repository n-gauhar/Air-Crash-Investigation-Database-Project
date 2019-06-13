<?php

if(isset($_GET['sub']))
{
    $con=mysqli_connect("localhost","root","") ;

    mysqli_select_db($con,"air_crash")  ;
        # code...
    $it=$_GET['iata'];
    $ic=$_GET['icao'];
    $cs=$_GET['cl'];
    $n=$_GET['name'];
    $c=$_GET['cou'];
    
    
    $s="INSERT INTO Airlines(IATA,ICAO,callsign,name,country) VALUES ('$it','$ic','$cs','$n','$c');";
    $CC=mysqli_query($con,$s);
}




?>