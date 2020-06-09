<?php 
session_start();
session_destroy();?>

<html>
<head>
	<meta charset=utf-8>
	<title></title>
</head>
<body>
<form method="POST" action="user.php" style="border: solid 1px; width: 400px;position: fixed; left: 35%; background: silver">
<p align="center">	<?php if ($_SESSION['login']=='empty') echo 'Вы ввели неверный логин или пароль<br/><br/>'; ?>
<p align="center">Введите данные  
<p align="center"><strong>Логин: </strong> 
<p align="center"><input type ="text" name="login"><br/>
<p><p align="center"><strong>Пароль:</strong>
<p align="center"><input type ="password" name = "password"><br/>
<p align="center"><input type ="submit" value = "Подтвердить">
</form>





