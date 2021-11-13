<?php
    $dbc = new mysqli('localhost', 'root', '', 'cheetah_sport');
    $sql = "INSERT INTO user (firstname, lastname, gender, kodmeli, email, number, password)
            VALUES ('{$_POST['firstname']}', '{$_POST['lastname']}', '{$_POST['gender']}', '{$_POST['kodmeli']}', '{$_POST['email']}', '{$_POST['number']}', '{$_POST['password']}')";
    $result = $dbc -> query($sql);
    $dbc -> close();
    echo 'Done';
?>