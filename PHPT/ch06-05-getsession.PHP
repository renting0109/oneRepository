<!-- 接收URL參數的網頁 -->
<?php
session_start();
if (!isset($_SESSION["username"])) {
    echo "Session變數不存在";
} else {
    echo $_SESSION["username"];
}
?>