<?php
$db = mysqli_connect("mysql2.000webhost.com","a4243734_user","Wanagow1","a4243734_wanagow");
if (mysqli_connect_errno()) {
    printf("Can't connect to SQL Server. Error Code %s\n", mysqli_connect_error($db));
    exit;
}
// Set the default namespace to utf8
$db->query("SET NAMES 'utf8'");
if ($_GET["update"]==true) {
	$name = $_GET["name"];
	$sql = "INSERT INTO nombre VALUES ('$name')";
	mysqli_query($sql) or die(mysql_error());
}


$db->close(); 
?>						