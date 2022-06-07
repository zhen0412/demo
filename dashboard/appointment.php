<?php

	header("Content-Type:text/html; charset=utf-8");
	include("connect.php");
	
	$na=$_POST['na'];
	$d=$_POST['da'];
	$t=$_POST['ti'];
	$ph=$_POST['pho'];
	$c=$_POST['car'];
    $g=$_POST['get'];
    $b=$_POST['back'];
    $h=$_POST['hr'];

	$sql="SELECT * FROM shop";
	
	
	$sql_insert="INSERT INTO `shop`(`name`, `date`, `time`, `phone`, `bike`, `get`, `back`,`hr/km`) VALUES ('$na','$d','$t','$ph','$c','$g','$b','$h')";
	

	mysqli_query($db_link,$sql_insert);
if (empty($_POST['na']) || empty($_POST['car'])) {
    echo "<script>alert('請先登入！');location.href = 'login.php';</script>";
}
else{
	echo "<script>alert('預約成功！');location.href = 'cart.php';</script>";
}
	

	
	mysqli_query($db_link,'SET NAMES utf8');
	

	mysqli_close($db_link);
?>