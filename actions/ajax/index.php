<?php
require_once '../../class.php';
if ($_SESSION['role']!='3'&&$_SESSION['role']!='2'||empty($_SESSION['role'])){
    header('HTTP/1.0 403 Forbidden');
    die();
    }
 ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; Charset=UTF-8">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="script.js"></script>
</head>
<body>
<form id="myForm" style="position: relative; left: 40%;">
<?php echo lang::trans('Select a category'); ?><br/>
<select id="pole">
    <option value="name">Name</option>
    <option value="surname">Surname</option>
    <option value="lang">Language</option>
</select>
<input id="search" type="text" name="search" /><br>
</form>
<div id="content"></div>
<p align="center"><input type="button" value="<?php echo lang::trans('Back'); ?>" onclick="location.href='../list.php'">
</body>
</html> 