<?php
session_start();
session_destroy();
session_write_close();
$_SESSION['user'] = $login;
header('Location: /polandsite/index.php');
?>