<?php
session_start();
$link = mysqli_connect('localhost', 'root' , '','lab');

$_SESSION['lang']=$_POST['lang'];
mysqli_query($link, "UPDATE `users` SET `lang` = '{$_POST['lang']}' WHERE `id`='" . mysqli_real_escape_string($link, $_SESSION['id']) . "';");
header("Location:../login/if.php");
?>



