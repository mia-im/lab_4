<?php
$link = mysqli_connect('localhost', 'root' , '','lab');

$stmt = mysqli_prepare($link, "INSERT INTO `users` (`login`, `password`, `name`, `surname`, `lang`, `role`) VALUES (?, ?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "sssssi", $_POST['login'], $_POST['password'], $_POST['name'], $_POST['surname'], $_POST['lang'], $_POST['role']);

mysqli_stmt_execute($stmt);  

header("Location:../list.php");
?>
