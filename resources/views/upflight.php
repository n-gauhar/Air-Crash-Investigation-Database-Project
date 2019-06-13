<?php

if(isset($_GET['sub']))
{
    $con=mysqli_connect("localhost","root","") ;

    mysqli_select_db($con,"air_crash")  ;
        # code...
    $t=$_GET['org'];
    $m=$_GET['des'];
    $n=$_GET['sta'];
    
    
    
    $s="UPDATE flight SET stat='$n' WHERE origin='$t' AND destination='$m'";
    $CC=mysqli_query($con,$s);
    if($CC){echo "<h1>Flight record updated successfully!!!</h1><br>" ;}
    else echo "<h1>Unable to update / No such record found </h1>";

}




?>