<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';
    $pid = $_GET['id'];
    $uid = Authentication :: uid();
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
    $sql = "SELECT * FROM bookmark_product
            WHERE userid = ? AND productid = ?";
    $result = $db -> query($sql, $uid, $pid);
    $bookmark = $result -> fetchArray();
    if(isset($bookmark['id'])){
        $sql = "DELETE FROM bookmark_product WHERE id = ?";
        $result = $db -> query($sql, $bookmark['id']);
        echo 'bookmark-off';
    }
    else{
        $sql = "INSERT INTO bookmark_product (userid, productid)
                VALUES (?, ?)";
        $result = $db -> query($sql, $uid, $pid);
        echo 'bookmark-on';
    }
    $db -> close();
?>