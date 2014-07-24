<?php
//$db = mysqli_connect("mysql2.000webhost.com","a4243734_alonso","Wanagow2","a4243734_gow2");
$db = mysqli_connect("localhost","root","","wanagow");
if (mysqli_connect_errno()) {
    printf("Can't connect to SQL Server. Error Code %s\n", mysqli_connect_error($db));
    exit;
}
$json   = array();
$db->query("SET NAMES 'utf8'");

$cultural =$_POST['cultural'];
$ballet =$_POST['ballet'];

$teatro =$_POST['teatro'];
$teatro_comedia = $_POST['comedia'];
$teatro_drama =$_POST['drama'];
$teatro_infantil =$_POST['infantilC'];
$teatro_musical =$_POST['musical'];
$teatro_otros =$_POST['otrosT'];
$circos =$_POST['circo'];

$exposicion =$_POST['exposicion'];
$exposicion_fotografia =$_POST['fotografia'];
$exposicion_escultura =$_POST['escultura'];
$exposicion_pintura =$_POST['pintura'];
$exposicion_libros =$_POST['libros'];
$exposicion_otrosE =$_POST['otrosE'];
$cine_arte =$_POST['cinearte'];

$culturales_musica =$_POST['musica'];
$musica_clasica =$_POST['clasica'];
$musica_instrumental =$_POST['instrumental'];
$musica_popular =$_POST['folklorepopular'];

$turistico =$_POST['turistico'];
$turistico_feria =$_POST['ferias'];
$turistico_carnavales =$_POST['carnavales'];
$turistico_peregrinaciones =$_POST['peregrinaciones'];
$turistico_fiestasReligiosas =$_POST['fiestasReligiosasIndigenas'];
$turistico_otros =$_POST['otrosTuristica'];

$entretenimiento =$_POST['entretenimiento'];
$entretenimiento_concierto =$_POST['conciertos'];
$concierto_electronica =$_POST['electronica'];
$concierto_jazz =$_POST['jazzblues'];
$concierto_trova =$_POST['trova'];
$concierto_rock =$_POST['rock'];
$concierto_alternativa =$_POST['alternativa'];
$concierto_grupera =$_POST['gruperanortena'];
$concierto_infantilE =$_POST['infantilE'];
$concierto_hiphop =$_POST['hiphop'];
$concierto_rancheras =$_POST['rancheras'];
$concierto_pop =$_POST['pop'];
$concierto_metal =$_POST['metal'];
$concierto_cristiana =$_POST['cristiana'];
$concierto_reague =$_POST['reague'];
$concierto_reggetton =$_POST['reggeatton'];
$concierto_salsa =$_POST['salsacumbia'];
$concierto_baladas =$_POST['baladasboleros'];

$deporte =$_POST['deportes'];
$deporte_futboll =$_POST['futbol'];
$deporte_basketball =$_POST['basquetball'];
$deporte_tenis =$_POST['tenis'];
$deporte_beisball =$_POST['beisball'];
$deporte_volleyball=$_POST['volleyball'];
$deporte_torneos =$_POST['torneos'];
$deporte_toros =$_POST['toros'];
$deporte_maratones =$_POST['maratones'];
$deporte_futbolAmericano =$_POST['futbolAmericano'];
$deporte_artesmarciales =$_POST['artesMarciales'];
$deporte_autosmotos =$_POST['autosmotos'];
$deporte_luchalibre =$_POST['luchaLibre'];
$deporte_box=$_POST['box'];
$deporte_atletismo=$_POST['atletismo'];

$barantro =$_POST['baresantos'];
$barantro_inaguracion =$_POST['inaguracion'];
$barantro_promocion =$_POST['promocion'];
$barantro_show =$_POST['show'];
$barantro_fiestastematicas =$_POST['fiestasTematicas'];
$barantro_bienvenida =$_POST['bienvenida'];

$academica =$_POST['academica'];
$academica_areaestudio =$_POST['areaestudio'];
$academica_congreso =$_POST['congresos'];
$academica_convencion=$_POST['convenciones'];
$academica_seminario=$_POST['seminarios'];
$academica_taller=$_POST['talleres'];
$academica_diplomado=$_POST['diplomados'];
$academica_curso=$_POST['cursos'];
$academica_expos =$_POST['expos'];
$academica_conferencia =$_POST['conferencia'];


switch($cultural)
{
    case "0":
    //    alert("Estoy dentro de un switcg");
    break;
    case "1":
    //    alert("Esta activo la preferencia Cultural");
                switch($ballet){
                    case "1":
                       if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'ballet' ")) {
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
                    break;
                    case "0":
                    break;
                }


        switch($teatro)
        {
            case "1":
         //       alert("Esta activo las preferencias de Teatro");
                switch($teatro_comedia){
                    case "1":
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
                    break;
                    case "0":
                    break;
                }
                switch($teatro_drama){
                    case "1":
                       if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'drama' ")) {
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
                    break;
                    case "0":
                    break;
                }
                
                switch($teatro_infantil){
                    case "1":
                        if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'infantil' ")) {
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
                    break;
                    case "0":
                    break;
                }
                
                switch($teatro_musical){
                    case "1":
                            if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                                FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                                WHERE E.idPromotor = P.idPromotor
                                AND E.idTipoEvento = T.idTipoEvento
                                AND D.idDestino = E.idDestino
                                AND T.detallesEvento =  'Musical' ")) {
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
                    break;
                    case "0":
                    break;
                }
                
                switch($teatro_otros){
                    case "1":
                if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Teatro otros' ")) {
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
                    break;
                    case "0":
                    break;
                }
                    
            break;
            case "0":
            break;
        }
        
        switch($circos){
                    case "1":
                       if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Circo' ")) {
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
                    break;
                    case "0":
                    break;
                }


        switch($exposicion){
            case "1":
        //        alert("Esta activo las preferencias de Exposicion");
                
                switch($exposicion_fotografia){
                case "1":
                   if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'fotografia' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($exposicion_escultura){
                case "1":
                   if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'escultura' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($exposicion_pintura){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'pintura' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($exposicion_libros){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'libros' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($exposicion_otrosE){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Exposicion otros' ")) {
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
                break;
                case "0":
                    break;
                }

                
            break;
            case "0":
                break;
        }
        

        switch($cine_arte){
                    case "1":
                       if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Cine de Arte' ")) {
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
                    break;
                    case "0":
                    break;
                }


        switch($culturales_musica){
            case "0":
            break;
            case "1":
            //    alert("Esta activo la preferencia de Musica");
                
                switch($musica_clasica){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Clasica' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($musica_instrumental){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Instrumental' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($musica_popular){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Popular' ")) {
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
                break;
                case "0":
                    break;
                }
                
                
            break;
        }
        
        switch($turistico){
            case "0":
            break;
            case "1":
                //alert("Esta activo la preferencia de Turistico");
                
                switch($turistico_feria){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Feria' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($turistico_carnavales){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Carnaval' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($turistico_peregrinaciones){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Peregrinacion' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($turistico_fiestasReligiosas){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Fiesta Religiosa' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($turistico_otros){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Turistico otros' ")) {
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
                break;
                case "0":
                    break;
                }
                
                
                
            break;
        }
        
    break;
}

switch($entretenimiento){
    case "0":
    break;
    case "1":
    //    alert("Esta activo la preferencia de Entretenimiento");
        
        switch($entretenimiento_concierto){
            case "0":
            break;
            case "1":
            //    alert("Esta activo la preferencia de conciertos");
                
                switch($concierto_electronica){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Electronica' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($concierto_jazz){
                case "1":
                   if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Jazz' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($concierto_trova){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Trova' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($concierto_rock){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Rock' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($concierto_alternativa){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Alternativa' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($concierto_grupera){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Grupera' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($concierto_infantilE){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Concierto Infantil' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($concierto_hiphop){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Hip Hop' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($concierto_rancheras){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Ranchera' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($concierto_pop){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Pop' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($concierto_metal){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Metal' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($concierto_reague){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Reague' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($concierto_reggetton){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Reggetton' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($concierto_baladas){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Balada' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($concierto_salsa){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Salsa' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($concierto_cristiana){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Cristiana' ")) {
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
                break;
                case "0":
                    break;
                }
                
            break;
        }

        switch($deporte){
            case "0":
            break;
            case "1":
            //    alert("Esta activo la preferencia de Deportes");
                
                switch($deporte_futboll){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Futboll' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($deporte_basketball){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Basketball' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($deporte_tenis){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Tenis' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($deporte_beisball){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Beisball' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($deporte_volleyball){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Volleyball' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($deporte_torneos){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Torneos' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($deporte_maratones){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Maraton' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($deporte_futbolAmericano){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Futboll Americano' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($deporte_artesmarciales){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Artes Marciales' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($deporte_autosmotos){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Autos o Motos' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($deporte_box){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Box' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($deporte_luchalibre){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Lucha Libre' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($deporte_atletismo){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Atletismo' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($deporte_toros){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Toros' ")) {
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
                break;
                case "0":
                    break;
                }
                
            break;
        }
        
        switch($barantro){
            case "0":
            break;
            case "1":
            //    alert("Esta activo la preferencia de Bares y Antros");
                
                switch($barantro_inaguracion){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Inaguracion' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($barantro_promocion){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Promocion' ")) {
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
                case "0":
                    break;
                }
                
                switch($barantro_show){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Show' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($barantro_fiestastematicas){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Fiesta Tematica' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($barantro_bienvenida){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Bienvenida' ")) {
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
                break;
                case "0":
                    break;
                }
                
                
            break;
        }
    break;
}

switch($academica){
    case "0":
    break;
    case "1":
    //    alert("Esta activo la preferencia de Academica");
        
                switch($academica_areaestudio){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Area de Estudio' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($academica_congreso){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Congreso' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($academica_convencion){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Convencion' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($academica_seminario){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Seminario' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($academica_taller){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Taller' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($academica_diplomado){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Diplomado' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($academica_curso){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Curso' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($academica_conferencia){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Conferencia' ")) {
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
                break;
                case "0":
                    break;
                }
                
                switch($academica_expos){
                case "1":
                    if($result = $db->query("SELECT E.fechaEvento, E.hora, E.titulo, E.costo, E.imagen, E.idEvento, E.descripcion, T.tipoEvento, D.calle
                        FROM Eventos AS E, TiposEventos AS T, Destinos AS D, Promotores AS P
                        WHERE E.idPromotor = P.idPromotor
                        AND E.idTipoEvento = T.idTipoEvento
                        AND D.idDestino = E.idDestino
                        AND T.detallesEvento =  'Expo' ")) {
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
                break;
                case "0":
                    break;
                }
        
        
    break;  
}




header("Content-Type: text/json");
echo json_encode(array( 'nombre'  =>   $json)); 

$db->close(); 
?> 