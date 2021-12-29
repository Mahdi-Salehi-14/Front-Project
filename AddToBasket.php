<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';

    $pid = $_GET['id'];
    $uid = Authentication :: uid();
    $pnumber = $_POST['productnumber'];

    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
    
    $sql = "INSERT INTO product_basket (userid, productid, productnumber)
            VALUES (?, ?, ?)";
    $result = $db -> query($sql, $uid, $pid, $pnumber);
    
    $db -> close();

    header('Location: ViewBasket.php');
    exit;
?>