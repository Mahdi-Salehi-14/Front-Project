<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
        $sql = "SELECT * FROM product ORDER BY productprice ASC LIMIT 10";
        $result = $db -> query($sql);
        $productlistcheapest = $result -> fetchAll();
        include 'index_View.php';
    $db -> close();
?>