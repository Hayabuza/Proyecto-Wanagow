<?php
//$db = mysqli_connect("mysql2.000webhost.com","a4243734_alonso","Wanagow2","a4243734_gow2");
$db = mysqli_connect("localhost","root","","wanagow");
if (mysqli_connect_errno()) {
    printf("Can't connect to SQL Server. Error Code %s\n", mysqli_connect_error($db));
    exit;
}
$email = $_POST['email'];
$academica     = $_POST['academica'];
$area = $_POST['area'];
$congreso    = $_POST['congreso'];
$convencion  = $_POST['convencion'];
$seminario  = $_POST['seminario'];
$taller  = $_POST['taller'];
$diplomado  = $_POST['diplomado'];
$curso  = $_POST['curso'];
$conferencia  = $_POST['conferencia'];
$expo  = $_POST['expo'];

$cultural  = $_POST['cultural'];
$ballet  = $_POST['ballet'];
$teatro  = $_POST['teatro'];
$comedia  = $_POST['comedia'];
$drama  = $_POST['drama'];
$infantilC  = $_POST['infantilC'];
$musical  = $_POST['musical'];
$otrosT  = $_POST['otrosT'];
$circos  = $_POST['circos'];
$exposiciones  = $_POST['exposiciones'];
$fotografia  = $_POST['fotografia'];
$escultura  = $_POST['escultura'];
$pintura  = $_POST['pintura'];
$libros  = $_POST['libros'];
$otrosE  = $_POST['otrosE'];
$cineArte  = $_POST['cineArte'];
$musica  = $_POST['musica'];
$clasica  = $_POST['clasica'];
$instrumental  = $_POST['instrumental'];
$folklorepopular  = $_POST['folklorepopular'];
$turistico  = $_POST['turistico'];
$ferias  = $_POST['ferias'];
$carnavales  = $_POST['carnavales'];
$peregrinacion  = $_POST['peregrinacion'];
$fiestasReligiosasIndigenas  = $_POST['fiestasReligiosasIndigenas'];
$otrosTuristica  = $_POST['otrosTuristica'];


$entretenimiento  = $_POST['entretenimiento'];
$conciertos  = $_POST['conciertos'];
$electronica  = $_POST['electronica'];
$jazzblues  = $_POST['jazzblues'];
$trova  = $_POST['trova'];
$rock  = $_POST['rock'];
$alternativa  = $_POST['alternativa'];
$gruperanortena  = $_POST['gruperanortena'];
$infantilE  = $_POST['infantilE'];
$hiphop  = $_POST['hiphop'];
$ranchera  = $_POST['ranchera'];
$pop  = $_POST['pop'];
$metal  = $_POST['metal'];
$reague  = $_POST['reague'];
$reggeatton  = $_POST['reggeatton'];
$baladasboleros  = $_POST['baladasboleros'];
$salsacumbia  = $_POST['salsacumbia'];
$cristiana  = $_POST['cristiana'];
$deportes  = $_POST['deportes'];
$futbol =$_POST['futbol'];
$basquetball  = $_POST['basquetball'];
$tenis  = $_POST['tenis'];
$beisball  = $_POST['beisball'];
$volleyball  = $_POST['volleyball'];
$torneos  = $_POST['torneos'];
$maratones  = $_POST['maratones'];
$autosmotos  = $_POST['autosmotos'];
$futbolAmericano  = $_POST['futbolAmericano'];
$artesMarciales  = $_POST['artesMarciales'];
$boxE  = $_POST['boxE'];
$luchaLibre  = $_POST['luchaLibre'];
$atletismo  = $_POST['atletismo'];
$toros  = $_POST['toros'];
$baresantros  = $_POST['baresantros'];
$inaguracion  = $_POST['inaguracion'];
$promocion  = $_POST['promocion'];
$showE  = $_POST['showE'];
$fiestasTematicas  = $_POST['fiestasTematicas'];
$bienvenida  = $_POST['bienvenida'];




$sql = "SELECT P.idPreferencia FROM Clientes AS C, ClientesPreferencias AS CP, Preferencias AS P
WHERE CP.idCliente = C.idCliente AND CP.idPreferencia = P.idPreferencia AND C.email ='$email' ";
$query = mysqli_query($db,$sql);
$results = mysqli_num_rows($query);
if ($results > 0)
{
    $row = mysqli_fetch_array($query);
    $id =$row['idPreferencia'];
    
    $insert = "UPDATE Academica  SET academica = '$academica', areaestudio ='$area', congresos='$congreso', convenciones ='$convencion', seminarios='$seminario', talleres='$taller', 
        diplomados ='$diplomado', cursos='$curso', conferencias='$conferencia', expos='$expo' WHERE idPreferencia ='$id'  ";

        $query  = mysqli_query($db,$insert);
        if ($query)
        {
            echo "Thanks for registering";
        }
        else
        {
            echo "Insert failed";
        }

    $insert = "UPDATE Cultural SET cultural ='$cultural', balletdanza='$ballet', teatro='$teatro', comedia='$comedia', drama='$drama', infantilC='$infantilC', musical='$musical', 
            otrosT ='$otrosT', circos='$circos', exposiciones='$exposiciones', fotografia='$fotografia', escultura='$escultura', pintura='$pintura', libros='$libros', otrosE='$otrosE', 
            cineArte ='$cineArte', musica='$musica', clasica='$clasica', instrumental='$instrumental', folklorepopular='$folklorepopular', turistico='$turistico', ferias='$ferias'
            ,carnavales='$carnavales', peregrinaciones='$peregrinacion', fiestasReligiosasIndigenas='$fiestasReligiosasIndigenas', otrosTuristica='$otrosTuristica' 
            WHERE idPreferencia = '$id' ";
    $query  = mysqli_query($db,$insert);
    if ($query)
    {
        echo "Thanks for registering";
    }
    else
    {
        echo "Insert failed";  //  $query  = mysqli_query($db,$insert);

    }

    
    

    $insert = "UPDATE  Entretenimiento SET  entretenimiento =  '$entretenimiento', conciertos =  '$conciertos', electronica =  '$electronica', jazzblues =  '$jazzblues', trova =  '$trova', rock =  '$rock', alternativa =  '$alternativa', gruperanortena =  '$gruperanortena', infantilE =  '$infantilE', hiphop =  '$hiphop', ranchera =  '$ranchera', pop =  '$pop', metal =  '$metal', reague =  '$reague', reggeatton =  '$reggeatton', baladasboleros =  '$baladasboleros', salsacumbia =  '$salsacumbia', cristiana =  '$cristiana', deportes =  '$deportes', futbol =  '$futbol', basquetball =  '$basquetball', tenis =  '$tenis', beisball =  '$beisball', volleyball =  '$volleyball', torneos =  '$torneos', maratones =  '$maratones', autosmotos =  '$autosmotos', futbolAmericano =  '$futbolAmericano', artesMarciales =  '$artesMarciales', boxE =  '$boxE', luchaLibre =  '$luchaLibre', atletismo =  '$atletismo', toros =  '$toros', baresantros =  '$baresantros', inaguracion =  '$inaguracion', promocion='$promocion',showE =  '$showE', fiestasTematicas =  '$fiestasTematicas', bienvenida =  '$bienvenida' WHERE idPreferencia ='$id' ";


    $query  = mysqli_query($db,$insert);
    if ($query)
    {
        echo "Thanks for registering";
    }
    else
    {
        echo "Insert failed";
    }
}
$db->close(); 
?>


    