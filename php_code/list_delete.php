<?php

header("Content-Type: text/html; charset=utf-8");   // 宣告本頁字元為UTF8碼

require('config.php');                    // 載入資料庫連結檔

$con = mysqli_connect($db_host, $db_user, $db_pass);
mysqli_select_db($con,$db_name);

$uid = $_GET["uid"];
$list = $_GET["list"];
$date = $_GET["date"];

//本帳號	,內容,日期,時間,地點

$sql_query =  "DELETE  提醒 WHERE 本帳號 = '$uid' AND 清單 = '$list' and 日期 = 'date' ";
	//新增事件
$result = mysqli_query($con,$sql_query);//執行sql
$sql_query =  "SELECT 本帳號	,清單,日期  FROM 提醒 WHERE 本帳號 = '$uid' AND 清單 = '$list'";
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