<?php
$db = mysqli_connect("mysql2.000webhost.com","a4243734_user","Wanagow1","a4243734_wanagow");
if (mysqli_connect_errno()) {
    printf("Can't connect to SQL Server. Error Code %s\n", mysqli_connect_error($db));
    exit;
}

$nombre 	= $_POST['nombre'];

$insert = "INSERT INTO nombre (nombre) VALUES ('" . $nombre . "')";
$db->query($insert);
printf("Thanks for the new name!");

$db->close(); 
?>