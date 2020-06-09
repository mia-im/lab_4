<?php
$link = mysqli_connect('localhost', 'root' , '','lab');

$login = $_POST["login"];
$password = $_POST["password"];

$result = mysqli_query($link, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");
include '../actions/dop/session.php';

header("Location: if.php");
?>																																																


