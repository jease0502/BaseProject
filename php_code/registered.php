<?php

header("Content-Type: text/html; charset=utf-8");   // 宣告本頁字元為UTF8碼

require('config.php');                    // 載入資料庫連結檔

$con = mysqli_connect($db_host, $db_user, $db_pass);
mysqli_select_db($con,$db_name);

$uid = $_GET["uid"];
$pwd = $_GET["pwd"];
//從app get uid and pwd

$sql_query =  "SELECT 帳號  FROM 帳號資料 WHERE 帳號 = '$uid' ";
//檢測資料庫是否有對應的username和password的sql

$result = mysqli_query($con,$sql_query);//執行sql

$rows=mysqli_num_rows($result);//返回一個數值
if($rows)
{
	echo "帳號重複";
}
else
{
	$sql_query =  "Insert INTO 帳號資料 VALUES ('$uid','$pwd')";
	//新增帳密
	$result = mysqli_query($con,$sql_query);//執行sql
	echo "插入".$result;
	$sql_query =  "SELECT 帳號  FROM 帳號資料 WHERE 帳號 = '$uid' ";
	//檢測資料庫是否有對應的username和password的sql
	$result = mysqli_query($con,$sql_query);//執行sql
	$rowsa=mysqli_num_rows($result);//返回一個數值
	if($rowsa)
	{
		echo "\n註冊成功";
	}
	else
	{
		echo "\n註冊失敗";
	}
}
?>