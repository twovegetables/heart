<?php
require 'db.php';
$con=dboperation::getConnect();
$o=456;
$o=657;
for($i=5;$i<500;$i++){
	for($j=0;$j<5;$j++){
		$ro=rand(456,656);
		$query="INSERT INTO older_user values($i,$ro)";
	mysqli_query($con,$query);
	}
}