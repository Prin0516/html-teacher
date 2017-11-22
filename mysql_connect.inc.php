<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Connect-Type" content="text/html";charset="utf-8"/>
</head>
<body>
<?php
$db_server="120.108.117.245/phpmyadmin";
$db_name="105021046";
$db_user="105021046";
$db_passwd="#3bAcCsEa";
if(!@mysql_connect($db_server,$db_user,$db_passwd))
    die("無法對資料庫連線");

mysql_query("SET NAMES utf-8");

if(!@mysql_select_db($db_name))
    die("無法使用資料庫");
?>
</body>
</html>