<?php
include("mysql_connect.inc.php");
$sql = "SELECT * FROM user where id = '1'";
$result = $link->query($sql);
$row = $result->fetch_row();
 ?>
<form name="form" method="post" action="index.php">
    電話:<input type="text" name="phone">
    email:<input type="text" name="email">
    <input type="submit" name="button" value="修改"/>
</form>
<?php
$phone = $_POST['phone'];
$email = $_POST['email'];
$sql1 = "UPDATE teachername SET email = '$email' WHERE id = '1'";
$result = $link->query($sql);

?>

