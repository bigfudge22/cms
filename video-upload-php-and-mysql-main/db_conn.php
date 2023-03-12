<?php  

$sname = "localhost";
$uname = "root";
$password = "root";
$port ="8089";
$db_name = "test_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name, $port);

if (!$conn) {
	echo "Connection failed!";
	exit();
}