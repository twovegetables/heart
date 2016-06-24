<?php
require 'db.php';
$con=dboperation::getConnect();
$older_id=$_POST['older_id'];
$name= $_POST['user-name'];
$birthday= $_POST['user-birthday'];
$phone= $_POST['user-phone'];
$hobit= $_POST['user-QQ'];
$illhistory= $_POST['user-geriatric'];
$allergy= $_POST['user-allergy'];


$query="UPDATE older SET name='$name',birthday='$birthday',phone='$phone',hobit='$hobit',illhistory='$illhistory',allergy='$allergy' WHERE older_id=$older_id";
mysqli_query($con,$query);
header("Location:../admin/admin-table.php");