<?php
require 'db.php';
$con=dboperation::getConnect();
$older_id=123;
$year=2016;
$month=6;
$types=array("跌倒报警","走失报警","生命体征监测报警","夜间离床未归报警");
$locations=array("黑风山","虎啸岭","流沙河","高老庄");
for($day=1;$day<31;$day+=3){
	$location=$locations[rand(0,3)];
	$type=$types[rand(0,3)];
	echo "insert into alert values($older_id,'$year-$month-$day','$location','$type')";
	mysqli_query($con,"insert into alert values($older_id,'$year-$month-$day','$location','$type')");
}
