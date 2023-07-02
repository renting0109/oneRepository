<!-- 啟動Session，設定Session變數 -->
<?php
session_start();
$_SESSION["username"] = "Linda"; //設定 Session變數
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>啟動Session，設定Session變數</title>
</head>

<body>
    啟動Session，設定Session變數值為Linda <br>
    <a href="ch06-05-getsession.PHP">連結到存取Session變數的網頁</a>

</body>

</html>