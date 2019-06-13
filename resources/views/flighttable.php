<?php

if(isset($_GET['sub']))
{
    $con=mysqli_connect("localhost","root","") ;

    mysqli_select_db($con,"air_crash")  ;
    
        #insert into flight table
    $fn=$_GET['f_no'];
    $or=$_GET['org'];
    $dt=$_GET['des'];
    $st=$_GET['sta'];
    $cd=$_GET['c_da'];
    
    
    $s="INSERT INTO flight(flight_no,origin,destination,stat,Crash_date) VALUES ('$fn','$or','$dt','$st','$cd');";
    $CC=mysqli_query($con,$s);

        #insert into occupants table
    $t=$_GET['f_no'];
    $m=$_GET['pas'];
    $n=$_GET['crew'];
    

    $s="INSERT INTO occupants(f_no,passenger,crew) VALUES ('$t','$m','$n');";
    $CC=mysqli_query($con,$s);

        #insert into incident table
    $fn=$_GET['f_no'];
    $si=$_GET['i_s'];
    $sm=$_GET['summary'];
    $fa=$_GET['fat'];
    $su=$_GET['sur'];
    
    
    $s="INSERT INTO incident(site,summary,fatalities,survivors,f_no) VALUES ('$si','$sm','$fa','$su','$fn');";
    $CC=mysqli_query($con,$s);
}




?>