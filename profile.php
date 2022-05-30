<?php
session_start();
if(!isset($_SESSION['login']))
{
    header('Location: /autoregistr/register.php');
}
else
{
?>

<?php 
    require_once 'vendor/connect.php';
    $login = $_SESSION['login'];
    $testquery = mysqli_query($connect, "SELECT * FROM `poland` WHERE login='$login'");
    
    $row = mysqli_fetch_array($testquery);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="you.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="center, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100;600&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap');
  </style>
<form action="index.php">
        <button class="chto"style="margin-top: 12px;position: 50%; color:whitesmoke; background-color:#66b5c7; padding: 4px;  border: none;
    border-radius: 2px;  text-align: center;  cursor: pointer;"> На главную </button> 
      </form>

    <br><H1 style="text-align: center; font-family: 'Raleway', sans-serif;">Личный кабинет</H1>

    <form  class="form-lk"  method="POST">
        <div>
			<div class="grid-4">
				<h2>Ваше имя</h2><input class="data" value="<?php echo $row[1]; ?>" />
        
                <h2>Ваше отчество</h2><input class="pass" value="<?php echo $row[2]; ?>">        
			</div>
			<div class="grid-4">
                <h2>Ваша почта</h2><input class="data" value="<?php echo $row[3]; ?>" />

			</div><br>
        </div>
		    <button style="margin-top: 12px;position: 50%; color:whitesmoke; background-color:#66b5c7; padding: 3px;  border: none;
    border-radius: 4px;  text-align: center;" type="submit" class="btn">Сохранить</button>
            <a href="autoregistr/vendor/logout.php" class="logout">Выход</a>
	</form>
</html>
<?php
}
?>
       
 