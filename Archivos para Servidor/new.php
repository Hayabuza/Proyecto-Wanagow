<?php
//$db = mysqli_connect("mysql2.000webhost.com","a4243734_alonso","Wanagow2","a4243734_gow2");
$db = mysqli_connect("localhost","root","","wanagow");
if (mysqli_connect_errno()) {
    printf("Can't connect to SQL Server. Error Code %s\n", mysqli_connect_error($db));
    exit;
}
// Set the default namespace to utf8
$db->query("SET NAMES 'utf8'");
$json   = array();
// Aqui se reciben los valores para poder hacer el registro 
$nombre    = $_POST['nombre'];
$apellido  = $_POST['apellido'];
$fechaNacimiento =$_POST['fecha'];
$genero =$_POST['genero'];
$email     = $_POST['email'];
$password  = $_POST['password'];
$activo =1;


/*
    Nota los mensajes de insert fail deben de enviarse en caso contrario no funciona 
    debido a que genera un acceso con solo tener el correo duplicado
    brinda acceso pero en cambio si se coloca el insert failed evita esto
*/

//La primera consulta sirve para evaluar si el correo esta registrado
$sql    = "SELECT email FROM Clientes WHERE email =  '" . $email. "'";
$query  = mysqli_query($db,$sql);
$results = mysqli_num_rows($query);
    
if ($results > 0)
{
    echo "That username or email already exists";
}
else
{
    // '2011-01-12'
    //Usando los valores de arriba se utiliza la sentencia SQL para poder ingresar la informacion del usuario
    $insert = "INSERT INTO  Clientes (nombre , apellidos , fechaNacimiento , genero , email , password , activo ) 
    VALUES ('$nombre',  '$apellido',  '$fechaNacimiento',  '$genero',  '$email',  '$password',  '$activo');"; 

    $query  = mysqli_query($db,$insert);
    if ($query)
    {
        // La consulta busca el ultimo registro ingresodo en la base de datos
        //Se ingresa un registro de preferencia    
            $insert = "INSERT INTO Preferencias (idPreferencia ) VALUES ('') ";
        
            $query  = mysqli_query($db,$insert);
            if ($query)
            {
                //echo "Thanks for registering. You may now login.";
            } else {
                echo "Insert failed";
            }
            //Se declaran 2 variables para agregar un registro nuevo   
            $idPreferencia ="";
            $idCliente ="";
                //Se realiza una busqueda entre las tablas Clientes y Preferencias 
                // de cual es el ultimo registro ingresado
                $rs = mysqli_query($db,"SELECT MAX(idPreferencia), MAX(idCliente) FROM Preferencias,Clientes");
                
                if ($row = mysqli_fetch_row($rs)) {
                    $idPreferencia = trim($row[0]);
                    //echo "La clave del usuario es :"+$idPreferencia+"Preferencias";
                    $idCliente = trim($row[0]);
                    //echo "La clave del usuario es :"+$idCliente+"Clientes";

                        //Ultilizando las variables declaradas arriba se ingresa el la base de datos    
                        $insert = "INSERT INTO ClientesPreferencias (idCliente , idPreferencia ) VALUES ('$idCliente', 
                         '$idPreferencia')";
                        $query  = mysqli_query($db,$insert);

                        if ($query) {
                            echo "Thanks for registering. You may now login.";
                        
                        } else {
                            echo "Insert failed";
                        }

                }

        
              //echo "Thanks for registering. You may now login. ";
    }
    else
    {
        echo "Insert failed";
    }
}
//$db->close(); 
?>