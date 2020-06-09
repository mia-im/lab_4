<p align="center"><table border = '1'>
<?php
include '../dop/table.html';
$pole = $_POST['pole'];
$link = mysqli_connect('localhost', 'root' , '','lab');
    $sql = mysqli_query($link, "SELECT `id`, `name`, `surname`,`login`,`lang`,`role` FROM `users` WHERE `$pole`='" . mysqli_real_escape_string($link, $_POST['search']) . "';");
include '../dop/table.php';
?>

</table>
