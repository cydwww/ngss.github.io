<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <?php
    session_start(); // 开始会话
    $error = ''; // 错误提示
    if (isset($_POST['submit'])) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            $error = "请填写用户名和密码";
        }
        else {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $conn = mysqli_connect("localhost", "1", "123456", "1"); // 连接数据库 
            $query = "SELECT username, password FROM zhanghaomima WHERE username='$username' AND password='$password'"; // SQL 查询语句
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) == 1) {
                $_SESSION['login_user'] = $username; // 设置 SESSION
                header("location: welcome.php"); // 跳转到欢迎页面
            } 
            else {
                $error = "用户名或密码不正确";
            }
            
$sql = "INSERT INTO zhanghaomima (zhanghao, password) VALUES ('$_POST[username]', '$_POST[password]')";
// 执行插入并处理结果
if ($conn->query($sql) === TRUE) {
    echo "插入新记录成功";
	
} else {
    echo "插入记录失败: " . $conn->error;
}


            mysqli_close($conn); // 关闭数据库连接
        }
    }
    ?>

    
    <h2>Login</h2>
    <form method="post">
        <label>Username:</label><br>
        <input type="text" name="username" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="submit" value="Login"><br>
    </form>
    
    <div style="color: red;"><?php echo $error; ?></div> 

</body>
</html>
