<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//資料庫設定
//資料庫位置
//$db_server = "localhost";
////資料庫名稱
//$db_name = "105021046";
////資料庫管理者帳號
//$db_user = "105021046";
////資料庫管理者密碼
//$db_passwd = "#3bAcCsEa";
//對資料庫連線
$link=mysqli_connect("localhost","105021046", "#3bAcCsEa","105021046");
if($link){
    echo"123";
}

////資料庫連線採UTF8
//mysql_query("SET NAMES utf8");
//
////選擇資料庫
//if(!@mysql_select_db($db_name))
//    die("無法使用資料庫");

?>
