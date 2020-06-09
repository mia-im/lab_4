<?php
require_once '../class.php';
if (empty($_SESSION['role'])){
		header('HTTP/1.0 403 Forbidden');
		die();
	}
?>

<form method="POST" action="../lang/lang.php">
	<select name="lang" >
		<option value="ru">Русский</option>
		<option value="uk">Українська</option>
		<option value="en">English</option>
	</select>
<input type="submit" value="<?php echo lang::trans('Choose'); ?>"/>
</form>






