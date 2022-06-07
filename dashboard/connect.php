<?php
header("Content-Type:text/html; charset=utf-8");
$db_host="localhost";
$db_user="root";
$db_pwd="0412";
$db_name="phpbook";
$db_link=@mysqli_connect($db_host,$db_user,$db_pwd,"phpbook");
?>