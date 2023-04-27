<?php
$sql = "INSERT INTO zhanghaomima (zhanghao, password) VALUES ('$_POST[username]', '$_POST[password]')";
// 执行插入并处理结果
if ($conn->query($sql) === TRUE) {
    echo "插入新记录成功";
	
} else {
    echo "插入记录失败: " . $conn->error;
}
?>
