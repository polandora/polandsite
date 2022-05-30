<?php
session_start();
if(isset($_SESSION['user']))
{
    header("Location: index.php");
}
session_write_close();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body style="background-color:#4dbbd7;">

    <!-- Форма регистрации -->

    <form action="vendor/signup.php" method="POST" enctype="multipart/form-data">
        <label >ФИО</label>
        <input style="border-radius: 2px;"type="text" name="full_name" placeholder="Введите свое полное имя">
        <label>Логин</label>
        <input style="border-radius: 2px; type="text" name="login" placeholder="Введите свой логин">
        <label>Телефон</label>
        <input  style="border-radius: 2px; type="text" name="number" placeholder="Введите номер телефона">
        <label>Почта</label>
        <input  style="border-radius: 2px; type="email" name="email" placeholder="Введите адрес своей почты">
        <label>Пароль</label>
        <input  style="border-radius: 2px; type="password" name="password" placeholder="Введите пароль">
        <button  style="border-radius: 2px; width=60px"type="submit">Зарегистрироваться</button>
        <p style="text-align: center;">
            Уже есть аккаунт? - <a href="auto.php">Войти</a>
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body> 
</html>