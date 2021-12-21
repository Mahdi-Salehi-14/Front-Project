<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
    $sql = "SELECT * FROM user WHERE id = ?";
    $result = $db -> query($sql, $_SESSION['uid']);
    $user = $result -> fetchArray();
    if($user['role'] != 'adminuser'){
        header('Location: 403.php');
        exit;
    }
    else{
        $sql = "SELECT * FROM product LIMIT 25";
        $result = $db -> query($sql);
        $productdatatable = $result -> fetchAll();
        include 'Product_DataTable_View.php';
        $db -> close();
    }
?>