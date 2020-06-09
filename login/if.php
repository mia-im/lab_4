<?php
session_start();

if(empty($_SESSION['login'])){
	$_SESSION['login']='empty';
	header("Location: main.php");
}

elseif(empty($_SESSION['lang'])){
	header("Location: ../lang/language.php");
}

else header("Location: ../users/".strtolower($_SESSION['role']).".php");
		
?>



