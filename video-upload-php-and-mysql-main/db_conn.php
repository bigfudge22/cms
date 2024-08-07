<?php

$sname = "localhost";
$uname = "root";
$password = "6628";
$port = "3306";
$db_name = "test_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name, $port);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
