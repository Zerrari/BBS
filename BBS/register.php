<?php
$username=$_POST["Username"];
$ema=$_POST["email"];
$pwd=md5($_POST["psw"]);
//连接数据表
$server_name="localhost";
$db_user="root";
$db_pwd="root123456";
$db_name="demo1";
$conn=mysqli_connect($server_name,$db_user,$db_pwd,$db_name);
if(!$conn)
{
	die("error1"."<br>");
}
//记录注册信息
$sql="INSERT INTO userinfo (email,username,password) VALUES ('$ema','$username','$pwd')";
if (mysqli_query($conn, $sql)) {
    header("location: homePage.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>




