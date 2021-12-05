<?php
    include 'DataBase.php';
    include 'Settings.php';
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
        $sql = "SELECT * FROM user LIMIT 25";
        $result = $db -> query($sql);
        $userdatatable = $result -> fetchAll();
        include 'User_DataTable_View.php';
    $db -> close();
?>