<!DOCTYPE html>
<html>

<head>

<title> homepage </title>

<link rel="stylesheet" type="text/css" href="styles/style.css" />

</head>

<body>
<header>
<h1 align="center"> 主页 </h1>
</header>

<table id="table" align="center" border="1" >
<caption>帖子列表</caption>
<span>[<a href="add.html">发表<a>] </span>
<tr>

<td><strong> 主题 </strong></td>
<td><strong> 作者 </strong></td>
<td><strong> 内容 </strong></td>

</tr>
<?php
//连接数据库
$server_name="localhost";
$db_user="root";
$db_pwd="root123456";
$db_name="demo1";
$conn=mysqli_connect($server_name,$db_user,$db_pwd,$db_name);
/* if(!$conn)
{
	die("error1"."<br>");
}6
echo "success1<br>"; */
//读取数据表进行表格填充
$sql = "SELECT theme,writer,content FROM article";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
?>
<tr>			
<td> <?php echo $row["theme"]; ?> </td>
<td> <?php echo $row["writer"]; ?> </td>
<td> <?php echo $row["content"]; }} ?> </td>
</tr>
</table>
<br><br>
<span>[<a href="comments.html">评论<a>] </span>

<table class="table" align="center" border="1">
<caption>评论区</caption>
<tr>

<td><strong> 评论者 </strong></td>
<td><strong> 内容 </strong></td>

</tr>

<?php
$sql = "SELECT commenter,comments FROM comments";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
?>

<tr>			
<td> <?php echo $row["commenter"]; ?> </td>
<td> <?php echo $row["comments"];}}?></td>
</tr>

</table>
</body>

</html>