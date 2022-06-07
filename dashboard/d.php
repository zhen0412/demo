<?php
header("Content-Type:text/html;charset=utf-8");
include("connect.php");

mysqli_query($db_link, "SET NAMES 'utf8'");

                                            
$sql = "SELECT * FROM `ass` where nbr='1'";

$result = mysqli_query($db_link,$sql);
$row = mysqli_fetch_row($result);
                                                                   
echo "引擎形式：".$row[1]."</br>";
echo "總排氣量：".$row[2]."</br>";
echo "最高馬力：".$row[3]."</br>";
echo "最大扭力：".$row[4]."</br>";
echo "車體：".$row[5]."</br>";
echo "軸距：".$row[6]."</br>";
echo "前煞車：".$row[7]."</br>";
echo "後煞車：".$row[8]."</br>";
echo "座高：".$row[9]."</br>";
echo "裝備重量：".$row[10]."</br>";
echo "油箱：".$row[11]."</br>";
											 
?>