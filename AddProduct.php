<?php
    include 'DataBase.php';
    include 'Settings.php';
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
    $sql = "INSERT INTO product (producttitle, productname, productdescription, productcode, category, brand, productprice, productimg)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $result = $db -> query($sql, $_POST['producttitle'], $_POST['productname'], $_POST['productdescription'], $_POST['productcode'], $_POST['category'], $_POST['brand'], $_POST['productprice'], $_POST['productimg']);
    $db -> close();
    echo 'Done';
?>