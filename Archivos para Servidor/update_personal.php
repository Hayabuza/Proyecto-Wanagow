<?php
//$db = mysqli_connect("mysql2.000webhost.com","a4243734_alonso","Wanagow2","a4243734_gow2");
$db = mysqli_connect("localhost","root","","wanagow");
if (mysqli_connect_errno()) {
    printf("Can't connect to SQL Server. Error Code %s\n", mysqli_connect_error($db));
    exit;
}

$correo_actual  = $_POST['correo_actual'];
$nombre         = $_POST['nombre'];
$apellidos      = $_POST['apellidos'];
$password       = $_POST['password'];
$fecha          = $_POST['fecha'];
$genero         = $_POST['genero'];

    $insert = "UPDATE Usuarios SET nombre = '$nombre', apellidos ='$apellidos', 
                    password='$password', genero='$genero', fechaNacimiento = '$fecha'
        WHERE email = '$correo_actual' ";
    $query  = mysqli_query($db,$insert);
    if ($query)
    {
        echo "Informacion Actualizada Correctamente";
    }
    else
    {
        echo "A ocurrido un error intente mas tarde";
    }

$db->close(); 
?>