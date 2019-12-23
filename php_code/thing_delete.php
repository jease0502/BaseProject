<?php

header("Content-Type: text/html; charset=utf-8");   // 宣告本頁字元為UTF8碼

require('config.php');                    // 載入資料庫連結檔

$con = mysqli_connect($db_host, $db_user, $db_pass);
mysqli_select_db($con,$db_name);

$uid = $_GET["uid"];
$thing = $_GET["thing"];
$date = $_GET["date"];
$time = $_GET["time"];
$place = $_GET["place"];

//本帳號	,內容,日期,時間,地點

$sql_query =  "DELETE  事件 WHERE 本帳號 = '$uid' AND 內容 = '$thing' AND 日期 = '$date' AND 時間 = '$time' AND 地點 = '$place'";
	//新增事件
$result = mysqli_query($con,$sql_query);//執行sql
$sql_query =  "SELECT 本帳號	,內容,日期,時間,地點  FROM 帳號資料 WHERE 本帳號 = '$uid' AND 內容 = '$thing' AND 日期 = '$date' AND 時間 = '$time' AND 地點 = '$place'";
	//檢測資料庫是否有對應的username和password的sql
$result = mysqli_query($con,$sql_query);//執行sql
$rowsa=mysqli_num_rows($result);//返回一個數值
if($rowsa)
{
	echo "\n刪除失敗";
}
else
{
	echo "\n刪除成功";
}
?>