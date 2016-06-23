<?php
	require './php/db.php';
	$index = 0;
	if(isset($_GET['index'])) {
		$index = (int)$_GET['index'];
	} 
	$con=dboperation::getConnect();
	$result=mysqli_query($con,"select count(*) from test");
	$row=mysqli_fetch_array($result);
	$pages = (int)($row[0])/10;
	if($index > ($pages-1)) {
		$index = ($pages-1);
	}
	
	$select = "select * from test limit ".($index*10).",10";
	$result = mysqli_query($con,$select);
	
	$datas = array();
	
	while($row = mysqli_fetch_row($result)) {
		$datas[] = $row;
	}
	
	echo json_encode($datas);
?>