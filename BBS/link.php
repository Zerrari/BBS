<?php
$db_name="localhost";
$db_user="root";
$db_pwd="root123456";
$conli = mysqli_connect($db_name,$db_user,$db_pwd);

if (! $conli)
{
	die("error");
}
echo "成功";
//mysqli_close($conli);
$sql2="CREATE TABLE MyGuests(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,	
	firstname VARCHAR(30) NOT NULL)";
$res2=mysqli_query($conli,$sql2);

echo "success";
mysqli_close($conli)
?>