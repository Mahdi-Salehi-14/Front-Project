<?php
    /*var_dump($_POST);*/
    $dbc = new mysqli('localhost', 'root', '', 'cheetah_sport');
    $sql = "INSERT INTO message (title, email, number, textarea)
            VALUES ('{$_POST['title']}', '{$_POST['email']}', '{$_POST['number']}', '{$_POST['textarea']}')";
    $result = $dbc -> query($sql);
    $dbc -> close();
    echo 'Done';
?>