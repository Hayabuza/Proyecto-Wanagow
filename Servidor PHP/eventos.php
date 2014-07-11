<?php
$db = mysqli_connect("mysql2.000webhost.com","a4243734_user","Wanagow1","a4243734_wanagow");
if (mysqli_connect_errno()) {
    printf("Can't connect to SQL Server. Error Code %s\n", mysqli_connect_error($db));
    exit;
}
$idEvento = $_POST['idEvento'];

$sql = "SELECT * FROM Eventos WHERE idEvento = '" . $idEvento . "'";
$query = mysqli_query($db,$sql);
$results = mysqli_num_rows($query);
if ($results > 0)
{
	$row = mysqli_fetch_array($query);
	$response = array(
		'logged' => true,
		'idEvento' => $row['idEvento'],
	);
	echo json_encode($response);
}
else
{
	$response = array(
		'logged' => false,
		'message' => 'No existe este evento'
	);
	echo json_encode($response);
}
$db->close(); 
?> 