<?php
//$db = mysqli_connect("mysql2.000webhost.com","a4243734_alonso","Wanagow2","a4243734_gow2");
$db = mysqli_connect("localhost","root","","wanagow");
if (mysqli_connect_errno()) {
    printf("Can't connect to SQL Server. Error Code %s\n", mysqli_connect_error($db));
    exit;
}

$email =$_POST['email'];
$db->query("SET NAMES 'utf8'");

$sql = "SELECT * FROM Clientes as C, Usuarios as U Where C.idUsuario = U.idUsuario AND U.email ='$email' ";
$query = mysqli_query($db,$sql);
$results = mysqli_num_rows($query);
if ($results > 0)
{
    $row = mysqli_fetch_array($query);
        
        $Cliente = $row['idCliente'];
        $Evento =$_POST['idEvento'];
        $Fecha =$_POST['fecha'];

        $sql = "SELECT * FROM Calendario AS C,Clientes AS Cli,Eventos AS E WHERE C.idCliente = Cli.idCliente AND C.idEvento = E.idEvento
               AND C.idEvento = '$Evento' ";
        $query = mysqli_query($db,$sql);
        $results = mysqli_num_rows($query);
        if ($results >0) {
            echo "Error ya has agregado este evento a tu Calendario";
        }else{
            $insert = "INSERT INTO Calendario (idCliente, idEvento, fecha) VALUES ('$Cliente', '$Evento', '$Fecha')";
            $query  = mysqli_query($db,$insert);
            if ($query)
            {
                echo "Se ha agregado un evento a tu calendario";
            }
            else
            {
                echo "A ocurrido un error intente mas tarde";
            }
        }


    

}



    

$db->close(); 
?>