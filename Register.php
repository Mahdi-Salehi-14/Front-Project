<?php
    include 'DataBase.php';
    include 'Settings.php';
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
    $sql = "INSERT INTO user (firstname, lastname, gender, kodmeli, email, number, password)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $result = $db -> query($sql, $_POST['firstname'], $_POST['lastname'], $_POST['gender'], $_POST['kodmeli'], $_POST['email'], $_POST['number'], $_POST['password']);
    $db -> close();
    echo 'Done';
?>