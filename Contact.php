<?php
    include 'DataBase.php';
    include 'Settings.php';
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
    $sql = "INSERT INTO message (title, email, number, textarea)
            VALUES (?, ?, ?, ?)";
    $result = $db -> query($sql, $_POST['title'], $_POST['email'], $_POST['number'], $_POST['textarea']);
    $db -> close();
    echo 'Done';
?>