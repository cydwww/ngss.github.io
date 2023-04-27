<?php
session_start(); // 开始会话
if(session_destroy()) { // 如果会话被销毁
    header("Location: login.php"); // 跳转到登录页面
}
?> 
