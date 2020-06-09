<?php
require_once "../class.php";

  if ($_SESSION['role']!='3'){
        header('HTTP/1.0 403 Forbidden');
        die();
    }
?>

<html>
<head>
    <title>Registration</title>
    <meta charset=utf-8>
</head>
<body>
<form name = "reg" action = "dop/reg.php" method = "post" style="border: solid 1px; width: 400px;position: fixed; left: 35%;">
   <?php include 'dop/add_ch_user.php'; ?>
    <p align="center"><button><?php echo lang::trans('Add'); ?></button>
</form>
</body>
</html>
