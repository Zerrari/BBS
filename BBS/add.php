<?php
//记录发帖内容
$theme_add=$_POST["theme"];
$content_add=$_POST["content"];
$writer_add=$_POST["writer"];
//连接数据库
$server_name="localhost";
$db_user="root";
$db_pwd="root123456";
$db_name="demo1";
$conn=mysqli_connect($server_name,$db_user,$db_pwd,$db_name);
//记录注册信息
$sql="INSERT INTO article (theme,writer,content) VALUES ('$theme_add','$writer_add','$content_add')";
if (mysqli_query($conn, $sql)) {
    header("location: homePage.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>