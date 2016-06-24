<?php
require 'db.php';
$older_id=123;
$con=dboperation::getConnect();
$hobits=array('钓鱼','浇花','佛学','哲学','散步','广场舞');
for($i=0;$i<200;$i++){
	$action=$hobits[rand(0,2)];
	mysqli_query($con,"INSERT INTO action(older_id, time, action) VALUES ($older_id,NOW()+$i*10000,'$action')");
}
