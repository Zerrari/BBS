<?php
//��¼��������
$content_add=$_POST["comment"];
$writer_add=$_POST["writer"];
//�������ݿ�
$server_name="localhost";
$db_user="root";
$db_pwd="root123456";
$db_name="demo1";
$conn=mysqli_connect($server_name,$db_user,$db_pwd,$db_name);
//��¼ע����Ϣ
$sql="INSERT INTO comments (commenter,comments) VALUES ('$writer_add','$content_add')";
if (mysqli_query($conn, $sql)) {
    header("location: homePage.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>