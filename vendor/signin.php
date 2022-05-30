<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = $_POST['password'];

  
    $mysqli_check = mysqli_query($connect, "select * from poland where login='$login'");
    $row = mysqli_fetch_array($mysqli_check);


    $quary_b = mysqli_query($connect, "select * from poland where password='$password' and login='$login'");
    $row_pass = mysqli_fetch_array($quary_b);

    if(!empty($login) and !empty($password))
{
if ($login == $row['login'] and $password == $row_pass['password']) {
session_start();

if(!isset($_SESSION['login']))
{
$_SESSION['login'] = $login;
header('Location: /autoregistr/index.php');
}
else
{
header('Location: /autoregistr/index.php');
}

session_write_close();
}
else
{
printf("Incorrect user");
}
}
else
{
printf('Empty Login or Password');
}
?>