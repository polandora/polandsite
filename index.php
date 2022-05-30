<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>

    <button> 
    <a href="/autoregistr/register.php">зарегистрируйтесь</a>!
        </button>
        <?php
session_start();
if(!isset($_SESSION['login'])) {?>
<a href="auto.php"><button class="cabinet">Личный кабинет</button></a>
<?php } else {?>
    <a href="profile.php"><button class="cabinet">Личный кабинет</button></a>
    <a href="exit.php"><button class="cabinet">Выход</button></a>
<?php }
session_write_close();
?>
</body>
</html>