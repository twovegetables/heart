<?php
require 'db.php';
$con=dboperation::getConnect();
$name= $_POST['user-name'];
$gender=$_POST['gender'];
$birthday= $_POST['user-birthday'];
$phone= $_POST['user-phone'];
$hobit= $_POST['user-QQ'];
$illhistory= $_POST['user-geriatric'];
$allergy= $_POST['user-allergy'];


$query="INSERT INTO older(name,gender, birthday, phone, hobit, illhistory, allergy) VALUES('$name','$gender','$birthday','$phone','$hobit','$illhistory','$allergy')";
mysqli_query($con,$query);
header("Location:../admin/admin-table.php");