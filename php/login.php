<?php 
session_start();

require 'db.php';

$phonenum=$_POST['username'];
$password=$_POST['password'];
$con=dboperation::getConnect();
$query="select * from user where phonenum='$phonenum'";
$result=mysqli_query($con,$query);
if($row=mysqli_fetch_array($result))
{
	if($row['password']==$password)
	{
		echo '密码正确';
		$_SESSION['username']=$phonenum;
		$_SESSION['user_id']=$row['user_id'];
		header('Location:../html/personal.php');
	}
	else
	{
		echo '密码错误';
	}
}
else
{
	echo '用户不存在';
}

?>
