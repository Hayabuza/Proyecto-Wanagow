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

if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'comedia' ")) {
    while ($row=$result->fetch_assoc()) {
        $json[]=array(
            'idEvento'=>$row['idEvento'],
            'titulo'=>$row['titulo'],
            'tipo'=>$row['tipoEvento'],
            'descripcion'=>$row['descripcion'],
            'lugar'=>$row['calle'],        
            'fecha'=>$row['fechaEvento'],
            'hora'=>$row['hora'],
            'costo'=>$row['costo'],
            'imagen'=>$row['imagen'],
           
            
        );
    }
}
$result->close();
 
header("Content-Type: text/json");
echo json_encode(array( 'nombre'  =>   $json)); 
$db->close(); 
?>						