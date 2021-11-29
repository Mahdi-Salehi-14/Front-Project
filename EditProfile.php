<?php
    include 'DataBase.php';
    include 'Settings.php';
    $uid = $_GET['id'];
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
    if(isset($_POST['submit']))
        {
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
                    echo 'Edited Successfully';
        }
    else
        {
            $sql = "SELECT * FROM user WHERE id = ?";
            $result = $db -> query($sql, $uid);
            $user = $result -> fetchArray();
            $firstname = $user['firstname'];
            $lastname = $user['lastname'];
            $gender = $user['gender'];
            $kodmeli = $user['kodmeli'];
            $email = $user['email'];
            $number = $user['number'];
            $password = $user['password'];
            include 'EditProfile_View.php';
        }
    
    $db -> close();
?>