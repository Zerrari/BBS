<?php
//�����¼��Ϣ
$log_name=$_POST["Username"];
$log_password=$_POST["psw"];
//�������ݱ�
$server_name="localhost";
$db_user="root";
$db_pwd="root123456";
$db_name="demo1";
$conn=mysqli_connect($server_name,$db_user,$db_pwd,$db_name);
$flag=false;
if(!$conn)
{
	die("error1"."<br>");
}
echo "success1<br>";
//��ȡ���ݱ�
$sql = "SELECT id, username, password FROM userinfo";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
    // ��ȡ����
    while($row = mysqli_fetch_assoc($result)) {
			if($row["username"] == $log_name)
			{
				if($row["password"]== md5($log_password))
					$flag=true;
			}
    }
} else {
    echo "0";
}
//�жϵ�¼�Ƿ�ɹ�
if($flag)
{
	header("location: homePage.php");
}
else
{
	header("location: logWeb.html");
}
?>