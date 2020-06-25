<?php
$link = mysqli_connect('localhost', 'root' , '','lab');

$stmt = mysqli_prepare($link, "SELECT * FROM `users` WHERE `login` = ? AND `password` = ?");
mysqli_stmt_bind_param($stmt, "ss", $_POST["login"], $_POST["password"]);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$user = mysqli_fetch_assoc($result);

include '../actions/dop/session.php';
header("Location: if.php");
?>																																																
