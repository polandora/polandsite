<?php
    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];

        mysqli_query($connect, "INSERT INTO `poland` (`id`, `full_name`, `login`, `email`,`number`, `password`) VALUES (NULL, '$full_name', '$login', '$email','$number', '$password')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../auto.php');

?>
