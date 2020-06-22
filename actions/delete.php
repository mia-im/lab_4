<?php
session_start();

  if ($_SESSION['role']!='3'){
        header('HTTP/1.0 403 Forbidden');
        die();
    }

$link = mysqli_connect('localhost', 'root' , '','lab');

$stmt = mysqli_prepare($link, "DELETE FROM `users` WHERE `id` = ?");
mysqli_stmt_bind_param($stmt, "i", $_GET['id']);

mysqli_stmt_execute($stmt);

$_SESSION['id_']=$_GET['id'];
$_SESSION['delete']='yes';
header("Location:list.php");	
?>
