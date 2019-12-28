<?php

header("Content-Type: text/html; charset=utf-8");   // 宣告本頁字元為UTF8碼

require('config.php');                    // 載入資料庫連結檔

$con = mysqli_connect($db_host, $db_user, $db_pass);
mysqli_select_db($con,$db_name);

$uid = $_GET["uid"];
$date = $_GET["date"];

//本帳號


$sql_query =  "SELECT  提醒 WHERE 本帳號 = '$uid' and 日期 = 'date' ";
	//新增事件
$result = mysqli_query($con,$sql_query);//執行sql	//檢測資料庫是否有對應的username和password的sql
echo $result;

?>