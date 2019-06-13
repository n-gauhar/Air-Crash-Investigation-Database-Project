<?php

if(isset($_GET['sub']))
{
    $con=mysqli_connect("localhost","root","") ;

    mysqli_select_db($con,"air_crash")  ;
        # code...
    $t=$_GET['typ'];
    $m=$_GET['man'];
    $n=$_GET['no'];
    
    
    
    $s="INSERT INTO aircraft(Type,manufacturer,national_origin) VALUES ('$t','$m','$n');";
    $CC=mysqli_query($con,$s);
}




?>