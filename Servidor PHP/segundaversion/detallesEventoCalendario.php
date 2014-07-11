<?php
//$db = mysqli_connect("mysql2.000webhost.com","a4243734_alonso","Wanagow2","a4243734_gow2");
$db = mysqli_connect("localhost","root","","wanagow");
if (mysqli_connect_errno()) {
    printf("Can't connect to SQL Server. Error Code %s\n", mysqli_connect_error($db));
    exit;
}
$dia = $_POST['dia'];
$db->query("SET NAMES 'utf8'");
$json   = array();


if($result = $db->
    query("SELECT DAY(E.fechaEvento),E.idEvento,E.titulo,E.fechaEvento,
        E.hora,E.costo, E.imagen, D.calle 
        FROM Clientes AS U, Calendario AS C,Destinos AS D, 
        Eventos AS E WHERE C.idCliente=U.idCliente AND C.idEvento = E.idEvento 
        AND E.idDestino = D.idDestino AND DAY(E.fechaEvento)='$dia'
        ORDER BY MONTH(C.fecha), DAY(C.fecha) ASC ")) 
{
    
    while ($row=$result->fetch_assoc()) {
            $json[]=array(
                'idEvento'=>$row['idEvento'],
                'titulo'=>$row['titulo'],   
                'fecha'=>$row['fechaEvento'],
                'hora'=>$row['hora'],
                'costo'=>$row['costo'],
                'imagen'=>$row['imagen'],
                'lugar'=>$row['calle'],   
            );
        }
}
$result->close();


header("Content-Type: text/json");
echo json_encode(array( 'nombre'  =>   $json)); 


/*
    var IMG_BASE = 'http://localhost/wanagow/img/';

    'idEvento'=>$row['idEvento'],
    'titulo'=>$row['titulo'],
    'tipo'=>$row['tipoEvento'],
    'descripcion'=>$row['descripcion'],
    'lugar'=>$row['calle'],        
    'fecha'=>$row['fechaEvento'],
    'hora'=>$row['hora'],
    'costo'=>$row['costo'],
    'imagen'=>$row['imagen'],


*/


$db->close(); 
?>







