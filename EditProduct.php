<?php
    include 'DataBase.php';
    include 'Settings.php';
    $pid = $_GET['id'];
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
    if(isset($_POST['submit']))
        {
            $sql = "UPDATE product SET
                    producttitle = ?,
                    productname = ?,
                    productdescription = ?,
                    productcode = ?,
                    category = ?,
                    brand = ?,
                    productprice = ?,
                    productimg = ?
                    WHERE id = {$pid}";
            $result = $db -> query($sql, $_POST['producttitle'], $_POST['productname'], $_POST['productdescription'], $_POST['productcode'], $_POST['category'], $_POST['brand'], $_POST['productprice'], $_POST['productimg']);
            echo 'Edited Successfully';
        }
    else
        {
            $sql = "SELECT * FROM product WHERE id = ?";
            $result = $db -> query($sql, $pid);
            $product = $result -> fetchArray();
            $producttitle = $product['producttitle'];
            $productname = $product['productname'];
            $productdescription = $product['productdescription'];
            $productcode = $product['productcode'];
            $category = $product['category'];
            $brand = $product['brand'];
            $productprice = $product['productprice'];
            $productimg = $product['productimg'];
            include 'EditProduct_View.php';
        }
    $db -> close();
?>