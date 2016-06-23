<?php
require 'db.php';
$con=dboperation::getConnect();
$older_id=123;
$time=time()-60*60*24;
while($time<time()+60*60*24){
	$heart_rate=rand(50,130);
	mysqli_query($con,"insert into heart_rate values($older_id,FROM_UNIXTIME($time),$heart_rate)");
	$time=$time+60*5;
}
