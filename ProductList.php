<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);

    if(isset($_SESSION['uid'])){
        $sql = "SELECT * FROM user WHERE id = ?";
        $result = $db -> query($sql, $_SESSION['uid']);
        $user = $result -> fetchArray();
    }

    $sql = "SELECT * FROM product LIMIT 10";
    $result = $db -> query($sql);
    $productlist = $result -> fetchAll();

    if(isset($_SESSION['uid'])){
        $sql = "SELECT * FROM like_product WHERE userid = ?";
        $result = $db -> query($sql, $_SESSION['uid']);
        $productlike = $result -> fetchAll();
    }
    
    include 'ProductList_View.php';
    $db -> close();
?>