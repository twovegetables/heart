<?php
/**
* 
*/
class dboperation
{

	public static $host='localhost';
	public static $username='root';
	public static $password='';
	public static $dbname='heartnurse';
	public static function getConnect(){
		$con=mysqli_connect(dboperation::$host,dboperation::$username,dboperation::$password,dboperation::$dbname);
		mysqli_query($con,"set character set 'utf8'");//读库 
  		mysqli_query($con,"set names 'utf8'");//写库 
		return $con;
	}
}
 ?>
