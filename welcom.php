
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <?php
    session_start(); // 开始会话
    if (isset($_SESSION['login_user'])) {
        echo "<h2>Welcome ".$_SESSION['login_user']."</h2>"; 
    } 
    else {
        header("location: login.php"); // 跳转到登录页面
    }
    ?>
    
    <a href="logout.php">Logout</a> <!-- 登出链接 -->
    <a href="home.html">跳转到主页</a>
</body>
</html>

