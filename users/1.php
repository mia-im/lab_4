<?php
require_once '../class.php';

if (empty($_SESSION['role'])){
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
	<br><a href="2.php"><?php echo lang::trans('Manager information'); ?></a>
</form>
<?php include '../actions/dop/users_buttons.php'; ?>
