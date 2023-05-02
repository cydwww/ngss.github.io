<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <?php
    session_start(); // 开始会话
    $error = '404 not found'; // 错误提示
    if (isset($_POST['submit'])) {
        if (empty($_POST['a']) || empty($_POST['b'])) {
            $error = "请填写用户名和密码";
        }
        else {
            $username = $_POST['a'];
            $password = $_POST['b'];
            $conn = mysqli_connect("localhost", "root", "000000", "1"); // 连接数据库 
            $query = "SELECT zhanghao,password FROM zhanghaomima WHERE zhanghao='$username' AND password='$password'"; // SQL 查询语句
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) == 1) {
                $_POST['a'] = $username; // 设置 SESSION
                header("location: welcome.php"); // 跳转到欢迎页面
            } 
            else {
                $error = "用户名或密码不正确";
            }
            

            mysqli_close($conn); // 关闭数据库连接
        }
    }
    ?>

    <form method="post">
        <label>Username:</label><br>
        <input type="text" name="c" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="k" value="Login"><br>
    </form>
    
    <div style="color: red;"><?php echo $error; ?></div> 

</body>
</html>
