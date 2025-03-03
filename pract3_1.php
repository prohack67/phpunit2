<?php
    error_reporting(E_ALL);
    $host="localhost";
    $user="root";
    $pass="";
    $dbname="db1";
    $con=mysqli_Connect($host,$user,$pass,$dbname);
    if($con) 
    {
        echo "Connection Established";
    }
    else
    {
        echo "Connection not Established";
    }
?> 