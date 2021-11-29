<?php
    include 'DataBase.php';
    include 'Settings.php';
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
        $sql = "SELECT * FROM product LIMIT 10";
        $result = $db -> query($sql);
        $productlist = $result -> fetchAll();
        include 'ProductList_View.php';
    $db -> close();
?>