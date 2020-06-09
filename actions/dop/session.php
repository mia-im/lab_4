<?php
session_start();
$user = mysqli_fetch_assoc($result);

$_SESSION = [
    "id" => $user['id'],
    "login" => $user['login'],
    "password" => $user['password'],
    "name" => $user['name'],
    "surname" => $user['surname'],
    "lang" => $user['lang'],
    "role" => $user['role']
];
?>