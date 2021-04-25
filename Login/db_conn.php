<?php

$sname= "127.0.0.1";
$unmae= "aditya";
$password = "password123";

$db_name = "test";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}