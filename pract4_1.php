<?php
    if(isset($_GET["msg"]))
    {
        echo $_GET["msg"];
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
    <form action="product_query.php" method="post">
        <table>
            <caption><b> Add Product</b></caption>
            <tr>
                <td><label for="name">Productname</label></td>
                <td><input type="text" name="Pro_name"></td>
            </tr>
            <tr>
                <td><label for="email">Price</label></td>
                <td><input type="number" name="Pro_prcie" step="0.01"></td>
            </tr>
            <tr>
                <td><label for="quality">Quality</label></td>
                <td><input type="number" name="QOH"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="Submit" value="Submit">
                <input type="reset" name="reset" value="reset"></td>
            </tr>
        </table>
    </form>

            

</body>
</html>