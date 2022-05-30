<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'poland');

    if (!$connect) {
        die('Error connect to DataBase');
    }
?>