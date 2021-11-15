<?php
    $dbc = new mysqli('localhost', 'root', '', 'cheetah_sport');
    $sql = "INSERT INTO product (producttitle, productname, productdescription, productcode, category, brand, productprice)
            VALUES ('{$_POST['producttitle']}', '{$_POST['productname']}', '{$_POST['productdescription']}', '{$_POST['productcode']}', '{$_POST['category']}', '{$_POST['brand']}', '{$_POST['productprice']}')";
    $result = $dbc -> query($sql);
    $dbc -> close();
    echo 'Done';
?>