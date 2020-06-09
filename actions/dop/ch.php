<?php
session_start();
$link = mysqli_connect('localhost', 'root' , '','lab');
 
$id=$_GET['id'];  
	mysqli_query($link, "UPDATE `users` SET `name` = '{$_POST['name']}',`surname` = '{$_POST['surname']}',`login` = '{$_POST['login']}', `password` = '{$_POST['password']}',`lang` = '{$_POST['lang']}' WHERE `id`='" . mysqli_real_escape_string($link, $id) . "';");

if ($id==$_SESSION['id']) {
	$result = mysqli_query($link, "SELECT * FROM `users` WHERE `id` = '$id'");
	include 'session.php';
	header("Location: ../../users/".strtolower($_SESSION['role']).".php");
}
else{
	mysqli_query($link, "UPDATE `users` SET `role` = '{$_POST['role']}' WHERE `id`='" . mysqli_real_escape_string($link, $id) . "';");
	header("Location:../list.php");
}
?>
