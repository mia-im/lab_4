<?php
session_start();
$link = mysqli_connect('localhost', 'root' , '','lab');

$id=(int)$_GET['id'];

if ($id==$_SESSION['id']) {
	$stmt = mysqli_prepare($link, "UPDATE `users` SET `name` = ?,`surname` = ?,`login` = ?, `password` = ?,`lang` = ? WHERE `id` = ?");
mysqli_stmt_bind_param($stmt, "sssssi", $_POST['name'], $_POST['surname'], $_POST['login'], $_POST['password'], $_POST['lang'], $_GET['id']);
mysqli_stmt_execute($stmt);

	$stmt = mysqli_prepare($link, "SELECT * FROM `users` WHERE `id` = ?");
mysqli_stmt_bind_param($stmt, "i", $_GET['id']);

mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
	
	include 'session.php';
	header("Location: ../../users/".strtolower($_SESSION['role']).".php");
}
else{
	$stmt = mysqli_prepare($link, "UPDATE `users` SET `name` = ?,`surname` = ?,`login` = ?, `password` = ?,`lang` = ?,`role` = ? WHERE `id` = ?");
mysqli_stmt_bind_param($stmt, "sssssii", $_POST['name'], $_POST['surname'], $_POST['login'], $_POST['password'], $_POST['lang'], $_POST['role'], $_GET['id']);

mysqli_stmt_execute($stmt);

	header("Location:../list.php");
}
?>
