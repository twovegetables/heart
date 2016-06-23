<?php
require 'db.php';
$con=dboperation::getConnect();
$older_id=123;
$year=2016;
$month=6;

for($day=1;$day<31;$day++){
	$sleeptime=rand(0,12);
	echo "insert into sleeptime values($older_id,'$year-$month-$day',$sleeptime";
	mysqli_query($con,"insert into sleeptime values($older_id,'$year-$month-$day',$sleeptime)");
}
