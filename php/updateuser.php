<?php
require '../php/db.php';
$con=dboperation::getConnect();
if(!isset($_POST['user-name'])){
	header("Location:admin-index.php");
}
echo "update older set name='$_POST['user-name']',birthday='$_POST['user-birthday']',phone='$_POST['user-phone']',hobit='$_POST['user-hobit']',allergy='$_POST['user-allergy']',illhistory='$_POST['user-disease']' where older_id=$_POST['older_id']";
mysqli_query($con,"update older set name='$_POST['user-name']',birthday='$_POST['user-birthday']',phone='$_POST['user-phone']',hobit='$_POST['user-hobit']',allergy='$_POST['user-allergy']',illhistory='$_POST['user-disease'] where older_id=$_POST['older_id']");
header("Location:admin-table.php");