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

    $sql = "SELECT * FROM product WHERE id = ?";
    $result = $db -> query($sql, $_GET['id']);
    $product = $result -> fetchArray();

    $sql = "SELECT * FROM comment WHERE productid = ? AND confirmation = 'confirmed'";
    $result = $db -> query($sql, $_GET['id']);
    $productcomment = $result -> fetchAll();

    include 'ViewProduct_View.php';
    $db -> close();
?>