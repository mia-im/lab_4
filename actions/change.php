<?php
require_once "../class.php";

  if ($_SESSION['role']!='3'){
        header('HTTP/1.0 403 Forbidden');
        die();
    }
?>

<html>
<head>
    <title>Change</title>
    <meta charset=utf-8>
</head>
<body>
<form name = "ch" action = "dop/ch.php?id=<? echo $_GET['id'];?>" method = "post" style="border: solid 1px; width: 400px;position: fixed; left: 35%;">
   <?php include 'dop/add_ch_user.php'; ?>
    <p align="center"><button><?php echo lang::trans('Change'); ?></button>
</form>
</body>
</html>
