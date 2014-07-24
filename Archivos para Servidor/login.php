<?php
//$db = mysqli_connect("mysql2.000webhost.com","a4243734_alonso","Wanagow2","a4243734_gow2");
$db = mysqli_connect("localhost","root","","wanagow");

if (mysqli_connect_errno()) {
    printf("Can't connect to SQL Server. Error Code %s\n", mysqli_connect_error($db));
    exit;
}
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT U.email,U.password,U.nombre,U.apellidos,U.fechaNacimiento,U.genero,A.academica,A.areaestudio,A.congresos,A.convenciones,A.seminarios,A.talleres
            ,A.diplomados,A.cursos,A.conferencias,A.expos, Cul.cultural,Cul.balletdanza,Cul.teatro,Cul.comedia,
            Cul.drama,Cul.infantilC, Cul.musical,Cul.otrosT,Cul.circos,Cul.exposiciones,Cul.fotografia,Cul.escultura,
            Cul.pintura,Cul.libros,Cul.otrosE,Cul.cineArte,Cul.musica,Cul.clasica,Cul.instrumental,Cul.folklorepopular,
            Cul.turistico,Cul.ferias,Cul.carnavales,Cul.peregrinaciones,Cul.fiestasReligiosasIndigenas,Cul.otrosTuristica,
            E.entretenimiento,E.conciertos,E.electronica,E.jazzblues,E.trova,E.rock,E.alternativa,E.gruperanortena,E.infantilE,
            E.hiphop,E.ranchera,E.pop,E.metal,E.reague,E.reggeatton,E.baladasboleros,E.salsacumbia,E.cristiana,E.deportes,
            E.futbol,E.basquetball,E.tenis,E.beisball,E.volleyball,E.torneos,E.maratones,E.autosmotos,E.futbolAmericano,
            E.artesMarciales,E.boxE,E.luchaLibre,E.atletismo,E.toros,E.baresantros,E.inaguracion,E.promocion,E.showE,
            E.fiestasTematicas,E.bienvenida
 FROM Usuarios as U, Clientes as C, ClientesPreferencias as CP, Preferencias as P, Cultural as Cul
        , Entretenimiento as E, Academica as A WHERE U.idUsuario = C.idUsuario  AND CP.idCliente = C.idCliente
        AND CP.idPreferencia = P.idPreferencia AND Cul.idPreferencia = P.idPreferencia AND E.idPreferencia =
        P.idPreferencia AND A.idPreferencia = P.idPreferencia AND U.email ='$email'  AND U.password ='$password' ";
$query = mysqli_query($db,$sql);
$results = mysqli_num_rows($query);
if ($results > 0)
{
    $row = mysqli_fetch_array($query);
    $response = array(
        'logged'                        => true,
        'email'                         => $row['email'],
        'password'                      => $row['password'],
        'nombre'                        => $row['nombre'],
        'apellidos'                     => $row['apellidos'],
        'fechaNacimiento'               => $row['fechaNacimiento'],
        'genero'                        => $row['genero'],
        'cultural'                      => $row['cultural'],
        'ballet'                        => $row['balletdanza'],
        'teatro'                        => $row['teatro'],
        'comedia'                       => $row['comedia'],
        'infantilC'                     => $row['infantilC'],
        'musical'                       => $row['musical'],
        'otrosT'                        => $row['otrosT'],
        'circos'                        => $row['circos'],
        'exposicion'                    => $row['exposiciones'],
        'fotografia'                    => $row['fotografia'],
        'escultura'                     => $row['escultura'],
        'pintura'                       => $row['pintura'],
        'libros'                        => $row['libros'],
        'otrosE'                        => $row['otrosE'],
        'cinearte'                      => $row['cineArte'],
        'musica'                        => $row['musica'],
        'clasica'                       => $row['clasica'],
        'instrumental'                  => $row['instrumental'],
        'folklorepopular'               => $row['folklorepopular'],
        'turistico'                     => $row['turistico'],
        'ferias'                        => $row['ferias'],
        'carnavales'                    => $row['carnavales'],
        'peregrinaciones'               => $row['peregrinaciones'],
        'fiestasReligiosasIndigenas'    => $row['fiestasReligiosasIndigenas'],
        'otrosTuristica'                => $row['otrosTuristica'],
        'entretenimiento'               => $row['entretenimiento'],
        'conciertos'                    => $row['conciertos'],
        'electronica'                   => $row['electronica'],
        'jazzblues'                     => $row['jazzblues'],
        'trova'                         => $row['trova'],
        'rock'                          => $row['rock'],
        'alternativa'                   => $row['alternativa'],
        'gruperanortena'                => $row['gruperanortena'],
        'infantilE'                     => $row['infantilE'],
        'hiphop'                        => $row['hiphop'],
        'rancheras'                     => $row['ranchera'],
        'pop'                           => $row['pop'],
        'metal'                         => $row['metal'],
        'reague'                        => $row['reague'],
        'reggeatton'                    => $row['reggeatton'],
        'baladasboleros'                => $row['baladasboleros'],
        'salsacumbia'                   => $row['salsacumbia'],
        'cristiana'                     => $row['cristiana'],
        'deportes'                      => $row['deportes'],
        'futbol'                        => $row['futbol'],
        'basquetball'                   => $row['basquetball'],
        'tenis'                         => $row['tenis'],
        'beisball'                      => $row['beisball'],
        'volleyball'                    => $row['volleyball'],
        'torneos'                       => $row['torneos'],
        'maratones'                     => $row['maratones'],
        'futbolAmericano'               => $row['futbolAmericano'],
        'box'                           => $row['boxE'],
        'luchaLibre'                    => $row['luchaLibre'],
        'atletismo'                     => $row['atletismo'],
        'toros'                         => $row['toros'],
        'autosmotos'                    => $row['autosmotos'],
        'baresantros'                   => $row['baresantros'],
        'inaguracion'                   => $row['inaguracion'],
        'promocion'                     => $row['promocion'],
        'show'                          => $row['showE'],
        'fiestasTematicas'              => $row['fiestasTematicas'],
        'bienvenida'                    => $row['bienvenida'],
        'academica'                     => $row['academica'],
        'areaestudio'                   => $row['areaestudio'],
        'congresos'                     => $row['congresos'],
        'convenciones'                  => $row['convenciones'],
        'seminarios'                    => $row['otrosTuristica'],
        'talleres'                      => $row['talleres'],
        'diplomados'                    => $row['diplomados'],
        'cursos'                        => $row['cursos'],
        'conferencias'                  => $row['conferencias'],
        'expos'                         => $row['expos'],
        
        
        
    );
    echo json_encode($response);
}
else
{
    $response = array(
        'logged'  => false,
        'message' => 'Invalid Username and/or Password'
    );
    echo json_encode($response);
}
$db->close(); 
?> 