<?php
//$db = mysqli_connect("mysql2.000webhost.com","a4243734_alonso","Wanagow2","a4243734_gow2");
$db = mysqli_connect("localhost","root","","wanagow");
if (mysqli_connect_errno()) {
    printf("Can't connect to SQL Server. Error Code %s\n", mysqli_connect_error($db));
    exit;
}



    $insert = "INSERT INTO Academica (academica, areaestudio, congresos, convenciones, seminarios, talleres, diplomados, cursos, conferencias, expos, idPreferencia) VALUES ('0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '100');";

        $query  = mysqli_query($db,$insert);
        if ($query)
        {
            echo "Thanks for registering";
        }
        else
        {
            echo "Insert failed";
        }

    $insert = "INSERT INTO  Cultural (cultural , balletdanza , teatro , comedia , drama , infantilC , musical , otrosT , circos , exposiciones , fotografia , escultura , pintura , libros , otrosE , cineArte , musica , clasica , instrumental , folklorepopular , turistico , ferias , carnavales , peregrinaciones , fiestasReligiosasIndigenas , otrosTuristica , idPreferencia ) VALUES ('0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '00',  '0',  '0',  '100')"; 

    $query  = mysqli_query($db,$insert);
    if ($query)
    {
        echo "Thanks for registering";
    }
    else
    {
        echo "Insert failed";    $query  = mysqli_query($db,$insert);

    }

    
    $insert = "INSERT INTO  Entretenimiento (entretenimiento , conciertos , electronica , jazzblues , trova , rock , alternativa , gruperanortena , infantilE , hiphop , ranchera , pop , metal , reague , reggeatton , baladasboleros , salsacumbia , cristiana , deportes , futbol , basquetball , tenis , beisball , volleyball , torneos , maratones , autosmotos , futbolAmericano , artesMarciales , boxE , luchaLibre , atletismo , toros , baresantros , inaguracion , promocion , showE , fiestasTematicas , bienvenida , idPreferencia ) VALUES ('0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '0',  '100')";
    $query  = mysqli_query($db,$insert);
    if ($query)
    {
        echo "Thanks for registering";
    }
    else
    {
        echo "Insert failed";
    }

$db->close(); 
?>

