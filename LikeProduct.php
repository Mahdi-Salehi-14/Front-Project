<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';
    include 'AddProduct_View.php';
    $pid = $_GET['id'];
    $uid = Authentication :: uid();
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
    $sql = "SELECT * FROM like_product
            WHERE userid = ? AND productid = ?";
    $result = $db -> query($sql, $uid, $pid);
    $like = $result -> fetchArray();
    if(isset($like['id'])){
        $sql = "DELETE FROM like_product WHERE id = ?";
        $result = $db -> query($sql, $like['id']);
    }
    else{
        $sql = "INSERT INTO like_product (userid, productid)
                VALUES (?, ?)";
        $result = $db -> query($sql, $uid, $pid);
    }
    $db -> close();
    echo 'Done';
?>