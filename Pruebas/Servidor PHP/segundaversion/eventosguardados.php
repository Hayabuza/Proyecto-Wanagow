<?php
//$db = mysqli_connect("mysql2.000webhost.com","a4243734_alonso","Wanagow2","a4243734_gow2");
$db = mysqli_connect("localhost","root","","wanagow");
if (mysqli_connect_errno()) {
    printf("Can't connect to SQL Server. Error Code %s\n", mysqli_connect_error($db));
    exit;
}
$cliente = 1;
$mes = $_POST['mes'];
$db->query("SET NAMES 'utf8'");
$json   = array();

if($result = $db->
    query("SELECT C.fecha,C.idEvento,DAY(C.fecha), MONTH(C.fecha), YEAR(C.fecha) FROM Calendario 
        AS C, Clientes AS CL, Eventos AS E WHERE  MONTH(C.fecha) ='$mes' AND C.idEvento = E.idEvento AND 
        C.idCliente = CL.idCliente AND CL.idCliente = '$cliente' 
        ORDER BY MONTH(C.fecha), DAY(C.fecha) ASC ")) 
{
    
    while ($row=$result->fetch_assoc()) {
            $json[]=array(
                'idEvento'=>$row['idEvento'],   
                'fecha'=>$row['fecha'],
                'dia'=>$row['DAY(C.fecha)'],
                'mes'=>$row['MONTH(C.fecha)'],
                'anio'=>$row['YEAR(C.fecha)']
            );
        }
}
$result->close();


header("Content-Type: text/json");
echo json_encode(array( 'nombre'  =>   $json)); 


$db->close(); 
?>