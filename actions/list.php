<?php
require_once '../class.php';

$link = mysqli_connect('localhost', 'root' , '','lab');

if ($_SESSION['role']!='3'&&$_SESSION['role']!='2'||empty($_SESSION['role'])){
    header('HTTP/1.0 403 Forbidden');
    die();
    }
?>

<html>
<head>
    <title>Users List</title>
</head>
<body>
<p align="center"><table border = '1'>

<?php
include 'dop/table.html';
if ($_SESSION['delete']=='yes') {
    echo lang::trans('User').' '.$_SESSION['id_'].' '.lang::trans('successfully deleted').'<br/>';
    $_SESSION['delete']='';
}

    $sql = mysqli_query($link, 'SELECT `id`, `name`, `surname`,`login`,`lang`,`role` FROM `users`');
   include 'dop/table.php';
   ?>

</table>
<p align="center"><input type="button" value="<?php echo lang::trans('Add new user'); ?>" onclick="location.href='registration.php'">
<p align="center"><input type="button" value="<?php echo lang::trans('Find'); ?>" onclick="location.href='ajax/index.php'">
<p align="center"><input type="button" value="<?php echo lang::trans('Back'); ?>" onclick="location.href='../users/<?php echo strtolower($_SESSION['role']).".php"; ?>'">
</body>
</html>