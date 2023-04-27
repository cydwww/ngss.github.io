欢迎<?php echo $_POST["a"];
// 连接数据库
$servername = "localhost";
$username = "1";
$password = "123456";
$dbname = "1";
$conn = new mysqli($servername, $username, $password, $dbname);
$zhanghao=$_POST["a"];
$ngsspassword=$_POST["b"];
// 检查连接是否成功
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}


if ($zhanghao<>$row)
{
	// 构造 SQL 查询语句
$sql = "SELECT * FROM zhanghaomima";

// 执行查询并处理结果
$result = $conn->query($sql);

} else {
    echo "0 结果";
}


$sql = "INSERT INTO zhanghaomima (zhanghao, password) VALUES ('$_POST[a]', '$_POST[b]')";

// 执行插入并处理结果
if ($conn->query($sql) === TRUE) {
    echo "插入新记录成功";
	
} else {
    echo "插入记录失败: " . $conn->error;
}
	


// 关闭连接
$conn->close();
?>
<a href="home.html">跳转到主页</a>