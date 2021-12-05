<?php
    include 'DataBase.php';
    include 'Settings.php';
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
        $sql = "SELECT * FROM message LIMIT 25";
        $result = $db -> query($sql);
        $messagedatatable = $result -> fetchAll();
        include 'Contact_DataTable_View.php';
    $db -> close();
?>