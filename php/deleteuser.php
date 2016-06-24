<?php
require 'db.php';
$con=dboperation::getConnect();
$older_id=$_GET['older_id'];
$query="delete from older where older_id = $older_id";
mysqli_query($con,$query);
header("Location:../admin/admin-table.php");
