<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';
    include 'AddProduct_View.php';
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
    $sql = "SELECT * FROM user WHERE id = ?";
    $result = $db -> query($sql, $_SESSION['uid']);
    $user = $result -> fetchArray();
    if($user['role'] != 'adminuser'){
        header('Location: 403.php');
        exit;
    }
    else{
        if(isset($_POST['submit'])){
            $sql = "INSERT INTO product (producttitle, productname, productdescription, productcode, category, brand, productprice, productimg)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $result = $db -> query($sql, $_POST['producttitle'], $_POST['productname'], $_POST['productdescription'], $_POST['productcode'], $_POST['category'], $_POST['brand'], $_POST['productprice'], $_POST['productimg']);
            $db -> close();
            header('Location: Product_DataTable.php');
            exit;
        }
    }
?>