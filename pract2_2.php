<?php
include("pract2_1.php");
$db_create="create database db1";
$qry=mysqli_query($con,$db_create);
if($qry)
{
    echo "Database Created Successfully";
}
else
{
    echo "Database not Created.";
}
?>