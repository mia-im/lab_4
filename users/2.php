<?php
require_once '../class.php';

if ($_SESSION['role']!='3'&&$_SESSION['role']!='2'||empty($_SESSION['role'])){
		header('HTTP/1.0 403 Forbidden');
		die();
	}

else {
		$user=auth();
		$user->printInf();
	}
?>

<form>
	<br><a href="3.php"><?php echo lang::trans('Admin information'); ?></a>
	<br><a href="1.php"><?php echo lang::trans('Client information'); ?></a>
</form>
<?php include '../actions/dop/users_buttons.php'; ?>
