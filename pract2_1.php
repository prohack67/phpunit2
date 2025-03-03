<?php
    error_reporting(E_ALL);roduct
    $host="localhost";
    $user="root";
    $pass="";
    $con=mysqli_Connect($host,$user,$pass);
    if($con)
    {
        echo "Connection Established";
    }
    else
    {
        echo "Connection not Establiushed";
    }
?>