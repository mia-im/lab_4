<?php
$link = mysqli_connect('localhost', 'root' , '','lab');

mysqli_query($link, "INSERT INTO `users` (`id`, `login`, `password`, `name`, `surname`, `lang`, `role`) VALUES (NULL, '{$_POST['login']}', '{$_POST['password']}', '{$_POST['name']}', '{$_POST['surname']}', '{$_POST['lang']}', '{$_POST['role']}')");  

header("Location:../list.php");
?>