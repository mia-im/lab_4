<?php
require_once "../class.php";
session_start();
if (empty($_SESSION['role'])){
        header('HTTP/1.0 403 Forbidden');
        die();
    }

?>

<html>
<head>
    <title>Settings</title>
    <meta charset=utf-8>
</head>
<body>
<form name = "ch" action = "dop/ch.php?id=<? echo $_SESSION['id'];?>" method = "post" style="border: solid 1px; width: 400px;position: fixed; left: 35%;">
    <label><p align="center">Login </label>
    <p align="center"><input type = "text" name = "login">
    <label><p align="center">Password </label>
    <p align="center"><input type = "password" name = "password">
    <label><p align="center">Name </label>
    <p align="center"><input type = "text" name = "name">
    <label><p align="center">Surname </label>
    <p align="center"><input type = "text" name = "surname">
    <label><p align="center">Language </label>
    <p align="center"><input type = "text" name = "lang">
    <p align="center"><button><?php echo lang::trans('Change'); ?></button>
</form>
</body>
</html>