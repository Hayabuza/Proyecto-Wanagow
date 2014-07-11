<?php
$db = mysqli_connect("mysql2.000webhost.com","a4243734_user","Wanagow1","a4243734_wanagow");
if (mysqli_connect_errno()) {
    printf("Can't connect to SQL Server. Error Code %s\n", mysqli_connect_error($db));
    exit;
}
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM Usuarios WHERE email = '" . $email . "' AND password = '" . $password . "'";
$query = mysqli_query($db,$sql);
$results = mysqli_num_rows($query);
if ($results > 0)
{
	$row = mysqli_fetch_array($query);
	$response = array(
		'logged' => true,
		'email' => $row['email'],
		'password' => $row['password']
	);
	echo json_encode($response);
}
else
{
	$response = array(
		'logged' => false,
		'message' => 'Invalid Username and/or Password'
	);
	echo json_encode($response);
}
$db->close(); 
?> 