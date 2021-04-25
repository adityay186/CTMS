<?php
/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost     = '127.0.0.1';
$databaseName     = 'crud';
$databaseUsername = 'aditya';
$databasePassword = 'password123';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
