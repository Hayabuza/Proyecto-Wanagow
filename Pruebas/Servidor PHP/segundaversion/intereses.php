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

if($result = $db->query(" SELECT tipoEvento, detallesEvento FROM TiposEventos")) {
    while ($row=$result->fetch_assoc()) {
        $json[]=array(
            'tipo'=>$row['tipoEvento'],
            'detalles'=>$row['detallesEvento'],
            
        );
    }
}
$result->close();
 
header("Content-Type: text/json");
echo json_encode(array( 'nombre'  =>   $json)); 
$db->close(); 
?>						