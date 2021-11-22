<?php
    include 'DataBase.php';
    include 'Settings.php';
    $uid = $_GET['id'];
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
    $sql = "UPDATE user
            SET firstname = ?,
            lastname = ?,
            gender = ?,
            kodmeli = ?,
            email = ?,
            number = ?,
            password = ?
            WHERE id = {$uid}";
    $result = $db -> query($sql, $_POST['firstname'], $_POST['lastname'], $_POST['gender'], $_POST['kodmeli'], $_POST['email'], $_POST['number'], $_POST['password']);
    $db -> close();
    echo 'Done';
?>