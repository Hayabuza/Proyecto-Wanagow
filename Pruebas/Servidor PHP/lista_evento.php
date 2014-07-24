<?php
$db = mysqli_connect("mysql2.000webhost.com","a4243734_user","Wanagow1","a4243734_wanagow");
if (mysqli_connect_errno()) {
    printf("Can't connect to SQL Server. Error Code %s\n", mysqli_connect_error($db));
    exit;
}
// Set the default namespace to utf8
$db->query("SET NAMES 'utf8'");
$json   = array();
if($result = $db->query("SELECT E.evento, E.lugar, E.costo 
FROM Eventos AS E, Intereses AS I
WHERE E.idInteres = I.idInteres")) {
    while ($row=$result->fetch_assoc()) {
        $json[]=array(
            'evento'=>$row['evento'],
            'lugar'=>$row['lugar'],
            'costo'=>$row['costo'],
        );
    }
}
$result->close();
 
header("Content-Type: text/json");
echo json_encode(array( 'evento'  =>   $json )); 
 
$db->close(); 
?>