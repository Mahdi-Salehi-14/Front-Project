<?php
    include 'DataBase.php';
    include 'Settings.php';
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
        $sql = "SELECT * FROM product LIMIT 25";
        $result = $db -> query($sql);
        $productdatatable = $result -> fetchAll();
        include 'Product_DataTable_View.php';
    $db -> close();
?>