<p align="center"><table border = '1'>
<?php
include '../dop/table.html';

$pole = $_POST['pole'];
$link = mysqli_connect('localhost', 'root' , '','lab');

$stmt = mysqli_prepare($link, "SELECT `id`, `name`, `surname`,`login`,`lang`,`role` FROM `users` WHERE `$pole` = ?");
mysqli_stmt_bind_param($stmt, "s", $_POST['search']);

mysqli_stmt_execute($stmt);

include '../dop/table.php';
?>

</table>
