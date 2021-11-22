<?php
    include 'DataBase.php';
    include 'Settings.php';
    $uid = $_GET['id'];
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
    $sql = "UPDATE product SET
            producttitle = ?,
            productname = ?,
            productdescription = ?,
            productcode = ?,
            category = ?,
            brand = ?,
            productprice = ?,
            productimg = ?
            WHERE id = {$uid}";
    $result = $db -> query($sql, $_POST['producttitle'], $_POST['productname'], $_POST['productdescription'], $_POST['productcode'], $_POST['category'], $_POST['brand'], $_POST['productprice'], $_POST['productimg']);
    $db -> close();
    echo 'Done';
?>