<?php
$dbhost = "127.0.0.1";  // MySQL主機位址，localhost=本機
$dbpass1 = "a110e109";  // MySQL帳號
$dbpass2 = "a110e109";  // MySQL密碼
$dbname = "dba110e109_05"; // 資料庫名稱
$conn  = new mysqli($dbhost, $dbpass1, $dbpass2, $dbname); // 連結MySQL資料庫
/* 檢查連線 */
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$today_YmdHis=date("YmdHis"); //今天日期-年月日時分秒
$today_Ymd=date("Y-m-d");     //今天日期-年月日
?>