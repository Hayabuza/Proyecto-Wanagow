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

    $academico ="Academica";
    $cultural ="Cultural | Turistica";
    $entretenumiento="Entretenimiento";
    // $activo = true;
    $email =$_POST['email'];


    $sql = "SELECT * FROM Clientes AS C, Usuarios AS U, ClientesPreferencias AS CP, Preferencias AS P, Entretenimiento AS E, Cultural AS Cul, Academica AS A
    WHERE C.idUsuario = U.idUsuario AND CP.idCliente = C.idCliente AND CP.idPreferencia = P.idPreferencia 
    AND P.idPreferencia = E.idPreferencia AND P.idPreferencia = Cul.idPreferencia AND P.idPreferencia = A.idPreferencia
    AND U.email ='$email' ";
    $query = mysqli_query($db,$sql);
    $results = mysqli_num_rows($query);
    if ($results > 0)
    {
        $row = mysqli_fetch_array($query);

            $academica_r =$row['academica'];
            $cultural_r =$row['cultural'];
            $entretenimiento_r =$row['entretenimiento'];

            $academica_areaestudio =$row['areaestudio'];
            $academica_areaestudio =$row['areaestudio'];
            $academica_congreso =$row['congresos'];
            $academica_convencion=$row['convenciones'];
            $academica_seminario=$row['seminarios'];
            $academica_taller=$row['talleres'];
            $academica_diplomado=$row['diplomados'];
            $academica_curso=$row['cursos'];
            $academica_expos =$row['expos'];
            $academica_conferencia =$row['conferencias'];
            $ballet =$row['balletdanza'];
            $teatro =$row['teatro'];
            $teatro_comedia = $row['comedia'];
            $teatro_drama =$row['drama'];
            $teatro_infantil =$row['infantilC'];
            $teatro_musical =$row['musical'];
            $teatro_otros =$row['otrosT'];
            $circos =$row['circos'];

            $exposicion =$row['exposiciones'];
            $exposicion_fotografia =$row['fotografia'];
            $exposicion_escultura =$row['escultura'];
            $exposicion_pintura =$row['pintura'];
            $exposicion_libros =$row['libros'];
            $exposicion_otrosE =$row['otrosE'];
            $cine_arte =$row['cineArte'];

            $culturales_musica =$row['musica'];
            $musica_clasica =$row['clasica'];
            $musica_instrumental =$row['instrumental'];
            $musica_popular =$row['folklorepopular'];

            $turistico =$row['turistico'];
            $turistico_feria =$row['ferias'];
            $turistico_carnavales =$row['carnavales'];
            $turistico_peregrinaciones =$row['peregrinaciones'];
            $turistico_fiestasReligiosas =$row['fiestasReligiosasIndigenas'];
            $turistico_otros =$row['otrosTuristica'];

            $entretenimiento_concierto =$row['conciertos'];
            $concierto_electronica =$row['electronica'];
            $concierto_jazz =$row['jazzblues'];
            $concierto_trova =$row['trova'];
            $concierto_rock =$row['rock'];
            $concierto_alternativa =$row['alternativa'];
            $concierto_grupera =$row['gruperanortena'];
            $concierto_infantilE =$row['infantilE'];
            $concierto_hiphop =$row['hiphop'];
            $concierto_rancheras =$row['ranchera'];
            $concierto_pop =$row['pop'];
            $concierto_metal =$row['metal'];
            $concierto_cristiana =$row['cristiana'];
            $concierto_reague =$row['reague'];
            $concierto_reggetton =$row['reggeatton'];
            $concierto_salsa =$row['salsacumbia'];
            $concierto_baladas =$row['baladasboleros'];

            $deporte =$row['deportes'];
            $deporte_futboll =$row['futbol'];
            $deporte_basketball =$row['basquetball'];
            $deporte_tenis =$row['tenis'];
            $deporte_beisball =$row['beisball'];
            $deporte_volleyball=$row['volleyball'];
            $deporte_torneos =$row['torneos'];
            $deporte_toros =$row['toros'];
            $deporte_maratones =$row['maratones'];
            $deporte_futbolAmericano =$row['futbolAmericano'];
            $deporte_artesmarciales =$row['artesMarciales'];
            $deporte_autosmotos =$row['autosmotos'];
            $deporte_luchalibre =$row['luchaLibre'];
            $deporte_box=$row['boxE'];
            $deporte_atletismo=$row['atletismo'];

            $barantro =$row['baresantros'];
            $barantro_inaguracion =$row['inaguracion'];
            $barantro_promocion =$row['promocion'];
            $barantro_show =$row['showE'];
            $barantro_fiestastematicas =$row['fiestasTematicas'];
            $barantro_bienvenida =$row['bienvenida'];

            //Estas 2 primeras consultas mandan a traer todos los eventos academica
            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='Academico'
                AND detallesEvento ='' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$academica_r     
                    );
                }
            }
            $result->close();


            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='$academico'
                AND detallesEvento ='Area de Estudio' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$academica_areaestudio     
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='$academico'
                AND detallesEvento ='Congreso' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$academica_congreso         
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='$academico'
                AND detallesEvento ='Curso' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$academica_curso         
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='$academico'
                AND detallesEvento ='Convencion' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$academica_convencion         
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='$academico'
                AND detallesEvento ='Seminario' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$academica_seminario         
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='$academico'
                AND detallesEvento ='Taller' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$academica_taller         
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='$academico'
                AND detallesEvento ='Diplomado' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$academica_diplomado         
                    );
                }
            }
            $result->close();
            

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='$academico'
                AND detallesEvento ='Conferencia' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$academica_conferencia         
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='$academico'
                AND detallesEvento ='Expo' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$academica_expos         
                    );
                }
            }
            $result->close();

            //Hasta aqui termina las 2 consultas de academica

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='$cultural'
                AND detallesEvento ='' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$cultural_r
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='Cultural'
                AND detallesEvento ='Ballet | Danza' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$ballet
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='Cultural'
                AND detallesEvento ='Teatro' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$teatro
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='Teatro'
                AND detallesEvento ='Comedia' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$teatro_comedia
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='Teatro'
                AND detallesEvento ='Drama' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$teatro_drama
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='Teatro'
                AND detallesEvento ='Infantil' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$teatro_infantil
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='Teatro'
                AND detallesEvento ='Musical' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$teatro_musical
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='Teatro'
                AND detallesEvento ='Otros' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$teatro_otros
                        
                    );
                }
            }
            $result->close();

           
            //Consulta de Evento de Circo
            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
                WHERE  tipoEvento='Cultural' AND detallesEvento = 'Circo' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$circos
                        
                    );
                }
            }
            $result->close();
            //Consulta para eventos de Exposiciones
            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
                WHERE detallesEvento =  'Exposiciones' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$exposicion
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
                WHERE tipoEvento =  'Exposicion' AND detallesEvento ='Fotografia' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$exposicion_fotografia
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
                WHERE tipoEvento =  'Exposicion' AND detallesEvento ='Escultura' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$exposicion_escultura
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
                WHERE tipoEvento =  'Exposicion' AND detallesEvento ='Pintura' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$exposicion_pintura
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
                WHERE tipoEvento =  'Exposicion' AND detallesEvento ='Libros' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$exposicion_libros
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
                WHERE tipoEvento =  'Exposicion' AND detallesEvento ='Otros' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$exposicion_otrosE
                        
                    );
                }
            }
            $result->close();

            //Fin de Consulta de Exposiciones
            //Inicio de Consulta para Cine de Arte y Musica
            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
                WHERE tipoEvento =  'Cultural' AND detallesEvento =  'Cine de Arte' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$cine_arte
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
                WHERE tipoEvento =  'Cultural' AND detallesEvento =  'Musica' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$culturales_musica
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
                WHERE tipoEvento =  'Musica' AND detallesEvento =  'Clasica' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$musica_clasica
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
                WHERE tipoEvento =  'Musica' AND detallesEvento =  'Instrumental' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$musica_instrumental
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
                WHERE tipoEvento =  'Musica' AND detallesEvento =  'Folklore | Popular' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$musica_popular
                        
                    );
                }
            }
            $result->close();

            //Inicio de Consulta de Turistico
            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
                WHERE tipoEvento =  'Cultural' AND detallesEvento =  'Turistico' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$turistico
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
                WHERE tipoEvento =  'Turistico' AND detallesEvento =  'Ferias' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$turistico_feria
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
                WHERE tipoEvento =  'Turistico' AND detallesEvento =  'Carnavales' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$turistico_carnavales
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
                WHERE tipoEvento =  'Turistico' AND detallesEvento =  'Peregrinaciones' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$turistico_peregrinaciones
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
                WHERE tipoEvento =  'Turistico' AND detallesEvento =  'Fiestas Religiosas | Indigenas' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$turistico_fiestasReligiosas
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos
                WHERE tipoEvento =  'Turistico' AND detallesEvento =  'Otras' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$turistico_otros
                        
                    );
                }
            }
            $result->close();

            //Fin de Turistico

             //Consultas de Entretenimiento
            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento='$entretenumiento'
                AND detallesEvento ='' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$entretenimiento_r
                        
                    );
                }
            }
            $result->close();
            //Consulta de Conciertos
            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
                WHERE tipoEvento='Entretenimiento' AND detallesEvento='Conciertos' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$entretenimiento_concierto
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE 
                tipoEvento='Conciertos' AND detallesEvento='Electronica' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$concierto_electronica
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE 
                tipoEvento='Conciertos' AND detallesEvento='Jazz | Blues' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$concierto_jazz
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE 
                tipoEvento='Conciertos' AND detallesEvento='Trova' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$concierto_trova
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE 
                tipoEvento='Conciertos' AND detallesEvento='Rock' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$concierto_rock
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE 
                tipoEvento='Conciertos' AND detallesEvento='Alternativa' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$concierto_alternativa
                        
                    );
                }
            }
            $result->close();
            //Para que se pueda colocar la ñ se tiene que crear la base de datos con UTF-8
            if($result = $db->query("SELECT idTipoEvento, tipoEvento, detallesEvento FROM TiposEventos WHERE tipoEvento =  'Conciertos'
                AND detallesEvento =  'Grupera | Nortena' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$concierto_grupera
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE 
                tipoEvento='Conciertos' AND detallesEvento='Infantil' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$concierto_infantilE
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE 
                tipoEvento='Conciertos' AND detallesEvento='Hip-Hop' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$concierto_hiphop
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE 
                tipoEvento='Conciertos' AND detallesEvento='Ranchera' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$concierto_rancheras
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE 
                tipoEvento='Conciertos' AND detallesEvento='Pop' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$concierto_pop
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE 
                tipoEvento='Conciertos' AND detallesEvento='Metal' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$concierto_metal
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE 
                tipoEvento='Conciertos' AND detallesEvento='Reague' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$concierto_reague
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE 
                tipoEvento='Conciertos' AND detallesEvento='Reggeatton' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$concierto_reggetton
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE 
                tipoEvento='Conciertos' AND detallesEvento='Baladas | Boleros' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$concierto_baladas
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE 
                tipoEvento='Conciertos' AND detallesEvento='Salsa | Cumbia' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$concierto_salsa
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE 
                tipoEvento='Conciertos' AND detallesEvento='Cristiana' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$concierto_cristiana
                        
                    );
                }
            }
            $result->close();

            //Inicio de Deportes
            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos WHERE 
                tipoEvento='Entretenimiento' AND detallesEvento='Deporte' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$deporte
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
                WHERE tipoEvento='Deportes' AND detallesEvento='Futbol' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$deporte_futboll
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
                WHERE tipoEvento='Deportes' AND detallesEvento='Basketball' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$deporte_basketball
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
                WHERE tipoEvento='Deportes' AND detallesEvento='Tenis' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$deporte_tenis
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
                WHERE tipoEvento='Deportes' AND detallesEvento='Beisball' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$deporte_beisball
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
                WHERE tipoEvento='Deportes' AND detallesEvento='Volleyball' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$deporte_volleyball
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
                WHERE tipoEvento='Deportes' AND detallesEvento='Torneos' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$deporte_torneos
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
                WHERE tipoEvento='Deportes' AND detallesEvento='Maratones' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$deporte_maratones
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
                WHERE tipoEvento='Deportes' AND detallesEvento='Autos | Motos' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$deporte_autosmotos
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
                WHERE tipoEvento='Deportes' AND detallesEvento='Futbol Americano' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$deporte_futbolAmericano
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
                WHERE tipoEvento='Deportes' AND detallesEvento='Artes Marciales' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$deporte_artesmarciales
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
                WHERE tipoEvento='Deportes' AND detallesEvento='Box' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$deporte_box
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
                WHERE tipoEvento='Deportes' AND detallesEvento='Lucha Libre' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$deporte_luchalibre
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
                WHERE tipoEvento='Deportes' AND detallesEvento='Atletismo' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$deporte_atletismo
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
                WHERE tipoEvento='Deportes' AND detallesEvento='Toros' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$deporte_toros
                        
                    );
                }
            }
            $result->close();


            //Inicio de Bares & Antros
            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
                WHERE tipoEvento='Entretenimiento' AND detallesEvento='Bares & Antros' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$barantro
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
                WHERE tipoEvento='Bares Antros' AND detallesEvento='Inaguracion' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$barantro_inaguracion
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
                WHERE tipoEvento='Bares Antros' AND detallesEvento='Promocion' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$barantro_promocion
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
                WHERE tipoEvento='Bares Antros' AND detallesEvento='Show' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$barantro_show
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
                WHERE tipoEvento='Bares Antros' AND detallesEvento='Fiestas Tematicas' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$barantro_fiestastematicas
                        
                    );
                }
            }
            $result->close();

            if($result = $db->query("SELECT idTipoEvento,tipoEvento, detallesEvento FROM TiposEventos 
                WHERE tipoEvento='Bares Antros' AND detallesEvento='Bienvenida' ")) {
                while ($row=$result->fetch_assoc()) {
                    $json[]=array(
                        'tipo'=>$row['tipoEvento'],
                        'id'=>$row['idTipoEvento'],
                        'detalles'=>$row['detallesEvento'],
                        'activo'=>$barantro_bienvenida
                        
                    );
                }
            }
            $result->close();

         //Fin $results
    }






    header("Content-Type: text/json");
    echo json_encode(array( 'nombre'  =>   $json)); 
    $db->close(); 
    ?>  