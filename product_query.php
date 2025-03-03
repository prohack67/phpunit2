<?php
    include("pract3_1.php");
    $productname=$_POST["Pro_name"];
    $price=$_POST["Pro_price"];
    $qoh=$_POST["QOH"];

    if(!empty($productname)&& !empty($price) && !empty($QOH))
    {
        $ins_="insert into product (Pro_name,Pro_price,QOH) values ('$productname','$price','$qoh')";
        $res=mysqli_query($con,$ins_qry);
        if($res)
        {
            header("location: product_record.php");
        }
    }
    else
    {
        header("location: pract4_1.php?msg=Please Try Again");
    }
?>
    
