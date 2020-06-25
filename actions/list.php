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
<p align="center"><a href="ajax/index.php" > <?php echo lang::trans('Find'); ?></a>

<p align="center"><table border = '1'>

<?php
include 'dop/table.html';
    if ($_SESSION['delete']=='yes') {
        echo lang::trans('User').' '.$_SESSION['id_'].' '.lang::trans('successfully deleted').'<br/>';
        $_SESSION['delete']='';
    }
    $stmt = mysqli_prepare($link, "SELECT `id`, `name`, `surname`,`login`,`lang`,`role` FROM `users`");

    mysqli_stmt_execute($stmt);
    $sql = mysqli_stmt_get_result($stmt);
include 'dop/table.php';
   ?>

</table>
<p align="center"><a href="registration.php" > <?php echo lang::trans('Add new user'); ?></a>
<p align="center"><a href="../users/<?php echo strtolower($_SESSION['role']).".php"; ?>" > <?php echo lang::trans('Back'); ?></a>
</body>
</html>
