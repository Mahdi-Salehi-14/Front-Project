<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';
    include 'Contact_View.php';
    if(isset($_POST['submit'])){
        $db = new db($dbhost, $dbuser, $dbpass, $dbname);
        $sql = "INSERT INTO message (title, email, number, textarea)
                VALUES (?, ?, ?, ?)";
        $result = $db -> query($sql, $_POST['title'], $_POST['email'], $_POST['number'], $_POST['textarea']);
        $db -> close();
    }
?>