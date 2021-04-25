<?php  

//open database connection
$mysqli = new mysqli('127.0.0.1','aditya','password123','test');

//Display error message
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

$sql="SELECT fruits FROM test";
$result=$mysqli->query($sql);
while ( $tables = $result->fetch_assoc())
{
echo "<br>".$tables['TABLE_NAME'];
}
// Free memory by clearing result
$result->free();

// close connection 
$mysqli->close();
?>