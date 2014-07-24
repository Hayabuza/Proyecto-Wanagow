<?php
//$db = mysqli_connect("mysql2.000webhost.com","a4243734_alonso","Wanagow2","a4243734_gow2");
$db = mysqli_connect("localhost","root","","wanagow");
if (mysqli_connect_errno()) {
    printf("Can't connect to SQL Server. Error Code %s\n", mysqli_connect_error($db));
    exit;
}
// Set the default namespace to utf-8
$db->query("SET NAMES 'utf8'");
$json   = array();
$academico ="Academica";
$cultural ="Cultural | Turistica";
$entretenumiento="Entretenimiento";
//Estas 2 primeras consultas mandan a traer todos los eventos academica
if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='Academico'
    AND detallesEvento ='' ")) 
{
    while ($row=$result->fetch_assoc()) {
        $json[]=array(
            'tipo'=>$row['tipoEvento'],
            'id'=>$row['idTipoEvento'],
            'detalles'=>$row['detallesEvento']         
        );
    }
}
$result->close();

if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='$academico' ")) 
{
    while ($row=$result->fetch_assoc())
     {
        $json[]=array(
            'tipo'=>$row['tipoEvento'],
            'id'=>$row['idTipoEvento'],
            'detalles'=>$row['detallesEvento']         
        );
    }
}
$result->close();

//Hasta aqui termina las 2 consultas de academica

if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='$cultural'
    AND detallesEvento ='' ")) 
{
    while ($row=$result->fetch_assoc())
     {
        $json[]=array(
            'tipo'=>$row['tipoEvento'],
            'id'=>$row['idTipoEvento'],
            'detalles'=>$row['detallesEvento']
            
        );
    }
}
$result->close();
//Consulta para los eventos de Danza y Teatro
if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
    WHERE tipoEvento='Cultural' AND detallesEvento ='Ballet | Danza' OR detallesEvento ='Teatro' 
    ORDER BY detallesEvento ")) 
{
    while ($row=$result->fetch_assoc()) {
        $json[]=array(
            'tipo'=>$row['tipoEvento'],
            'id'=>$row['idTipoEvento'],
            'detalles'=>$row['detallesEvento']
            
        );
    }
}
$result->close();
//Consulta de los eventos de Teatro
if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
    WHERE tipoEvento =  'teatro' ORDER BY detallesEvento ")) 
{
    while ($row=$result->fetch_assoc()) {
        $json[]=array(
            'tipo'=>$row['tipoEvento'],
            'id'=>$row['idTipoEvento'],
            'detalles'=>$row['detallesEvento']
            
        );
    }
}
$result->close();
//Consulta de Evento de Circo
if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
    WHERE detallesEvento = 'circo' ")) 
{
    while ($row=$result->fetch_assoc()) {
        $json[]=array(
            'tipo'=>$row['tipoEvento'],
            'id'=>$row['idTipoEvento'],
            'detalles'=>$row['detallesEvento']
            
        );
    }
}
$result->close();
//Consulta para eventos de Exposiciones
if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
    WHERE detallesEvento =  'Exposiciones' ")) 
{
    while ($row=$result->fetch_assoc()) {
        $json[]=array(
            'tipo'=>$row['tipoEvento'],
            'id'=>$row['idTipoEvento'],
            'detalles'=>$row['detallesEvento']
            
        );
    }
}
$result->close();

if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
    WHERE tipoEvento =  'Exposicion' ")) 
{
    while ($row=$result->fetch_assoc()) {
        $json[]=array(
            'tipo'=>$row['tipoEvento'],
            'id'=>$row['idTipoEvento'],
            'detalles'=>$row['detallesEvento']
            
        );
    }
}
$result->close();
//Fin de Consulta de Exposiciones
//Inicio de Consulta para Cine de Arte y Musica
if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
    WHERE detallesEvento =  'Cine de Arte' OR detallesEvento ='Musica' 
    ORDER BY detallesEvento")) 
{
    while ($row=$result->fetch_assoc()) {
        $json[]=array(
            'tipo'=>$row['tipoEvento'],
            'id'=>$row['idTipoEvento'],
            'detalles'=>$row['detallesEvento']
            
        );
    }
}
$result->close();

if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
    WHERE tipoEvento =  'Musica' ")) 
{
    while ($row=$result->fetch_assoc()) {
        $json[]=array(
            'tipo'=>$row['tipoEvento'],
            'id'=>$row['idTipoEvento'],
            'detalles'=>$row['detallesEvento']
            
        );
    }
}
$result->close();
//Inicio de Consulta de Turistico
if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
    WHERE detallesEvento =  'Turistico' ")) 
{
    while ($row=$result->fetch_assoc()) {
        $json[]=array(
            'tipo'=>$row['tipoEvento'],
            'id'=>$row['idTipoEvento'],
            'detalles'=>$row['detallesEvento']
            
        );
    }
}
$result->close();

if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
    WHERE tipoEvento =  'Turistico' ")) 
{
    while ($row=$result->fetch_assoc()) {
        $json[]=array(
            'tipo'=>$row['tipoEvento'],
            'id'=>$row['idTipoEvento'],
            'detalles'=>$row['detallesEvento']
            
        );
    }
}
$result->close();

//Fin de Turistico

 //Consultas de Entretenimiento
if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='$entretenumiento'
    AND detallesEvento ='' ")) 
{
    while ($row=$result->fetch_assoc()) {
        $json[]=array(
            'tipo'=>$row['tipoEvento'],
            'id'=>$row['idTipoEvento'],
            'detalles'=>$row['detallesEvento']
            
        );
    }
}
$result->close();
//Consulta de Conciertos
if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento 
    FROM TiposEventos WHERE detallesEvento='Conciertos' ")) 
{
    while ($row=$result->fetch_assoc()) 
    {
        $json[]=array(
            'tipo'=>$row['tipoEvento'],
            'id'=>$row['idTipoEvento'],
            'detalles'=>$row['detallesEvento']
            
        );
    }
}
$result->close();

if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento 
    FROM TiposEventos WHERE tipoEvento='Conciertos' ")) 
{
    while ($row=$result->fetch_assoc()) {
        $json[]=array(
            'tipo'=>$row['tipoEvento'],
            'id'=>$row['idTipoEvento'],
            'detalles'=>$row['detallesEvento']
            
        );
    }
}
$result->close();
//Inicio de Deportes
if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
    WHERE detallesEvento='Deporte' ")) 
{
    while ($row=$result->fetch_assoc()) {
        $json[]=array(
            'tipo'=>$row['tipoEvento'],
            'id'=>$row['idTipoEvento'],
            'detalles'=>$row['detallesEvento']
            
        );
    }
}
$result->close();

if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
    WHERE tipoEvento='Deportes' ")) 
{
    while ($row=$result->fetch_assoc()) {
        $json[]=array(
            'tipo'=>$row['tipoEvento'],
            'id'=>$row['idTipoEvento'],
            'detalles'=>$row['detallesEvento']
            
        );
    }
}
$result->close();
//Inicio de Bares & Antros
if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
    WHERE detallesEvento='Bares & Antros' ")) 
{
    while ($row=$result->fetch_assoc()) {
        $json[]=array(
            'tipo'=>$row['tipoEvento'],
            'id'=>$row['idTipoEvento'],
            'detalles'=>$row['detallesEvento']
            
        );
    }
}
$result->close();

if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
    WHERE tipoEvento='Bares Antros' ")) 
{
    while ($row=$result->fetch_assoc()) {
        $json[]=array(
            'tipo'=>$row['tipoEvento'],
            'id'=>$row['idTipoEvento'],
            'detalles'=>$row['detallesEvento']
            
        );
    }
}
$result->close();

header("Content-Type: text/json");
echo json_encode(array( 'nombre'  =>   $json)); 
$db->close(); 
?>  