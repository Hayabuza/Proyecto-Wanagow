<?php 
//$db = mysqli_connect("mysql2.000webhost.com","a4243734_alonso","Wanagow2","a4243734_gow2");
$db = mysqli_connect("localhost","root","","wanagow");
if (mysqli_connect_errno()) {
    printf("Can't connect to SQL Server. Error Code %s\n", mysqli_connect_error($db));
    exit;
}

$email     = $_POST['email'];
$password  = $_POST['password'];
$nombre    = $_POST['nombre'];
$apellido  = $_POST['apellido'];
 
$sql    = "SELECT email FROM Usuarios WHERE email = '" . $email. "'";
$query  = mysqli_query($db,$sql);
$results = mysqli_num_rows($query);
    
if ($results > 0)
{
    echo "That username or email already exists";
}
else
{
    $insert = "INSERT INTO Usuarios (email,password,nombre,apellidos) VALUES ('" . $email . "','" . $password . "','" . $nombre . "','" . $apellido . "')";
    $query  = mysqli_query($db,$insert);
    if ($query)
    {
        echo "Thanks for registering. You may now login.";
    }
    else
    {
        echo "Insert failed";
    }
}
$db->close(); 
?>