<?php 
session_start();
if(!isset($_SESSION['username'])){
	echo '请先登录';
	header('Location:login.php');
}
 ?>