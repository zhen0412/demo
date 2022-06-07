<?php

	header("Content-Type:text/html; charset=utf-8");
	include("connect.php");
	
	$na=$_POST['na'];
	$ac=$_POST['acc'];
	$pa=$_POST['pwd'];
	$bi=$_POST['bir'];
	$ph=$_POST['pho'];

	$sql="SELECT * FROM user";
	
	
	$sql_insert="INSERT INTO `user` (name,account,password,birthday,phone)VALUES('$na','$ac','$pa','$bi','$ph')";
	

	mysqli_query($db_link,$sql_insert);
	echo "<script>alert('註冊成功');location.href = 'login.php';</script>";
    
	

	
	mysqli_query($db_link,'SET NAMES utf8');
	

	mysqli_close($db_link);
?>