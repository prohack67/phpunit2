<?php
include("pract3_1.php");
$sel_qry="select * from product";
$res=mysqli_query($con,$sel_qry);
if(!empty($_POST["search_product"]))
{
    $search=$_POST["search_product"];
    $sel_qry="select * from product where Pro_Id=$search";
    $res=mysqli_query($con,$sel_qry);
}
else
{
    $sel_qry="select * from product";
    $res=mysqli_query($con,$sel_qry);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><a href="product_record.php">+Add New Record</a></h3>
    <div style="float:right;width:150px;margin-right:100px;">
        <form action="<?php $_SERVER["PHP_SELF"];?>" method="post">
            <table>
                <tr>
                    <td>
                        <select name="search_product">
                            <option value="">Please Select</option>
                            <?php
                            $sel_qry_search="select * from product";
                            $res_search=mysqli_query($con,$sel_qry_search);
                            while($row_search=mysqli_fetch_array($res_search))
                            {
                                ?>
                                <option value="<?php echo $row_search["Pro_Id"];?>">
                                    <?php echo $row_search["Pro_name"];?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <input type="submit" name="submit"value="Search">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <table border="1">
        <tr bgcolor="#6699FF">
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Quanlity</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
 <?php
        while($row=mysqli_fetch_array($res))
        {
            ?>
            <tr bgcolor="#FFCC33">
                <td><?php echo $row["Pro_Id"];?></td>
                <td><?php echo $row["Pro_name"];?></td>
                <td><?php echo $row["Pro_price"];?></td>
                <td><?php echo $row["QOH"];?></td>
                <td><?php echo "<a href=unit2_Prog6.php?pid=$row[Pro_Id] style=text-decoration:none>Edit</a>"?></td>
                <td><?php echo "<a href=unit2_Prog7.php?pid=$row[Pro_Id] style=text-decoration:none>Delete</a>"?></td>
            </tr>
            <?php
                }
            ?>
</table>
</body>
</html>