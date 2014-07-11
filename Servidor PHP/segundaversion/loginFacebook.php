<?php 

function cambiafechamysql($fecha)
{ 
    ereg( "([0-9]{1,2})/([0-9]{1,2})/([0-9]{2,4})", $fecha, $mifecha); 
    $fechana=$mifecha[3]."-".$mifecha[2]."-".$mifecha[1]; 
    return $fechana;
}


//$db = mysqli_connect("mysql2.000webhost.com","a4243734_alonso","Wanagow2","a4243734_gow2");
$db = mysqli_connect("localhost","root","","wanagow");
if (mysqli_connect_errno()) {
    printf("Can't connect to SQL Server. Error Code %s\n", mysqli_connect_error($db));
    exit;
}

$nombre    = $_POST['nombre'];
$apellido  = $_POST['apellido'];
$fechaNacimiento =$_POST['fechaNacimiento'];
$genero =$_POST['genero'];
$email     = $_POST['email'];                            
$password  = "facebook";
$activo =$_POST['activo'];

$fecha = cambiafechamysql($fechaNacimiento);


$sql    = "SELECT email FROM Usuarios WHERE email = '" . $email. "'";
$query  = mysqli_query($db,$sql);
$results = mysqli_num_rows($query);
    
if ($results > 0)
{
    echo "That username or email already exists";
}
else
{
    /*

    INSERT INTO wanagow.Usuarios (idUsuario, nombre, apellidos, fechaNacimiento, genero, email, password, activo) VALUES (NULL, 'KASJLDKJASK', 'JLKJLK', '2014-06-11 00:00:00', '1', 'SDASDJH', 'HHDA', '1');

    */
    $insert = "INSERT INTO Usuarios (email,password,nombre,apellidos,genero,activo,fechaNacimiento) 
    VALUES ('$email','$password','$nombre','$apellido','$genero','$activo','$fechaNacimiento')";

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