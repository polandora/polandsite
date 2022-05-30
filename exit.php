<?php
session_start();
session_destroy();
session_write_close();
$_SESSION['login'] = $number;
header('Location: /autoregistr/index.php');
?>