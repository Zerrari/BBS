<!DOCTYPE HTML>
<?php
//连接数据库
$server_name="localhost";
$db_user="root";
$db_pwd="root123456";
$conn=mysqli_connect($server_name,$db_user,$db_pwd);
if(!$conn)
{
	die("error1"."<br>");
}


?>
<html>
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<head>
<title> 主页 </title>
<script>
 function buttonClick()
 {
	window.location.href="register.html";
 }
</script>

</head>
<body>

<div id="log" style="width:400px;float:left;height:600px">

<h1 class="head2">BBS log</h1>

<form action="log.php" method="post">

Username:<br>
<input type="text" name='Username' required>
<br>
Password:<br>
<input type="password" name='psw' required>
<br>
<input type="submit" value="log in">
</form>

<input id="button" type="button" value="register" onclick="buttonClick();">


</div>

</body>

</html>