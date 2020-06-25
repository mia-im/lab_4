<?php
session_start();
$link = mysqli_connect('localhost', 'root' , '','lab');

$_SESSION['lang']=$_POST['lang'];
$stmt = mysqli_prepare($link, "UPDATE `users` SET `lang` = ? WHERE `id` = ?");
mysqli_stmt_bind_param($stmt, "si", $_POST['lang'], $_SESSION['id']);
mysqli_stmt_execute($stmt);

header("Location:../login/if.php");
?>



