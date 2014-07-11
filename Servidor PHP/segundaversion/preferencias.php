<?php
//$db = mysqli_connect("mysql2.000webhost.com","a4243734_alonso","Wanagow2","a4243734_gow2");
$db = mysqli_connect("localhost","root","","wanagow");
    printf("Can't connect to SQL Server. Error Code %s\n", mysqli_connect_error($db));
    exit;
}
$email = $_POST['email'];
$json   = array();

if($result = $db->query("SELECT U.email, U.password, A.congresos, Cul.teatro, E.conciertos, E.rock
FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
WHERE C.idUsuario = U.idUsuario
AND CP.idPreferencia = P.idPreferencia
AND CP.idCliente = C.idCliente
AND P.idPreferencia = Cul.idPreferencia
AND P.idPreferencia = A.idPreferencia
AND P.idPreferencia = E.idPreferencia"))
{
    while ($row=$result->fetch_assoc()) 
    {
        $json[]=array(
            'correo'=>$row['email'],
            'congreso'=>$row['congresos'],
            'teatro'=>$row['teatro'],
            'rock'=>$row['rock'],
            'concierto'=>$row['conciertos'],

        );
    }
}
$result->close();
 
header("Content-Type: text/json");
echo json_encode(array( 'nombre'  =>   $json)); 

$db->close(); 
?> 