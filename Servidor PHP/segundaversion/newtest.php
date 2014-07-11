<?php
//$db = mysqli_connect("mysql2.000webhost.com","a4243734_alonso","Wanagow2","a4243734_gow2");
$db = mysqli_connect("localhost","root","","wanagow");
if (mysqli_connect_errno()) {
    printf("Can't connect to SQL Server. Error Code %s\n", mysqli_connect_error($db));
    exit;
}
$email = $_POST['email'];
$json   = array();

$cultural ="1";
$teatro ="1";
$teatro_comedia ="1";
$teatro_drama ="1";
$teatro_infantil ="1";
$teatro_musical ="1";
$teatro_otros ="1";
$exposicion ="1";
$exposicion_fotografia ="1";
$exposicion_escultura ="1";
$exposicion_pintura ="1";
$exposicion_libros ="1";
$exposicion_otrosE ="1";
$culturales_musica ="1";
$musica_clasica ="1";
$musica_instrumental ="1";
$musica_popular ="1";
$turistico ="1";
$turistico_feria ="1";
$turistico_carnavales ="1";
$turistico_peregrinaciones ="1";
$turistico_fiestasReligiosas ="1";
$turistico_otros ="1";

$entretenimiento ="1";
$entretenimiento_concierto ="1";
$concierto_electronica ="1";
$concierto_jazz ="1";
$concierto_trova ="1";
$concierto_rock ="1";
$concierto_alternativa ="1";
$concierto_grupera ="1";
$concierto_infantilE ="1";
$concierto_hiphop ="1";
$concierto_rancheras ="1";
$concierto_pop ="1";
$concierto_metal ="1";
$concierto_cristiana ="1";
$concierto_reague ="1";
$concierto_reggetton ="1";
$concierto_salsa ="1";
$concierto_baladas ="1";

$deporte ="1";
$deporte_futboll ="1";
$deporte_basketball ="1";
$deporte_tenis ="1";
$deporte_beisball ="1";
$deporte_volleyball="1";
$deporte_torneos ="1";
$deporte_toros ="1";
$deporte_maratones ="1";
$deporte_futbolAmericano ="1";
$deporte_artesmarciales ="1";
$deporte_autosmotos ="1";
$deporte_luchalibre ="1";
$deporte_box="1";
$deporte_atletismo="1";

$barantro ="1";
$barantro_inaguracion ="1";
$barantro_promocion ="1";
$barantro_show ="1";
$barantro_fiestastematicas ="1";
$barantro_bienvenida ="1";

$academica ="1";
$academica_areaestudio ="1";
$academica_congreso ="1";
$academica_convencion="1";
$academica_seminario="1";
$academica_taller="1";
$academica_diplomado="1";
$academica_curso="1";

switch($cultural)
{
    case "0":
    //    alert("Estoy dentro de un switcg");
    break;
    case "1":
    //    alert("Esta activo la preferencia Cultural");
        
        switch($teatro)
        {
            case "1":
         //       alert("Esta activo las preferencias de Teatro");
        //        
                switch($teatro_comedia){
                    case "1":
                        if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                       if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                        if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
            //            alert("Esta activo las preferencias de Teatro de Musical");
                    break;
                    case "0":
                    break;
                }
                
                switch($teatro_otros){
                    case "1":
                if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                WHERE C.idUsuario = U.idUsuario
                AND CP.idPreferencia = P.idPreferencia
                AND CP.idCliente = C.idCliente
                AND P.idPreferencia = Cul.idPreferencia
                AND P.idPreferencia = A.idPreferencia
                AND P.idPreferencia = E.idPreferencia "))
                {
                    while ($row=$result->fetch_assoc()) 
                    {
                        $json[]=array(
                            'correo'=>$row['email'],
                            'cultural'=>$row['cultural'],
                            'Entretenimiento'=>$row['entretenimiento'],
                            'Acadenica'=>$row['academica']
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
        
        switch($exposicion){
            case "1":
        //        alert("Esta activo las preferencias de Exposicion");
                
                switch($exposicion_fotografia){
                case "1":
                   if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                    FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                    WHERE C.idUsuario = U.idUsuario
                    AND CP.idPreferencia = P.idPreferencia
                    AND CP.idCliente = C.idCliente
                    AND P.idPreferencia = Cul.idPreferencia
                    AND P.idPreferencia = A.idPreferencia
                    AND P.idPreferencia = E.idPreferencia "))
                    {
                        while ($row=$result->fetch_assoc()) 
                        {
                            $json[]=array(
                                'correo'=>$row['email'],
                                'cultural'=>$row['cultural'],
                                'Entretenimiento'=>$row['entretenimiento'],
                                'Acadenica'=>$row['academica']
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
                   if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                    FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                    WHERE C.idUsuario = U.idUsuario
                    AND CP.idPreferencia = P.idPreferencia
                    AND CP.idCliente = C.idCliente
                    AND P.idPreferencia = Cul.idPreferencia
                    AND P.idPreferencia = A.idPreferencia
                    AND P.idPreferencia = E.idPreferencia "))
                    {
                        while ($row=$result->fetch_assoc()) 
                        {
                            $json[]=array(
                                'correo'=>$row['email'],
                                'cultural'=>$row['cultural'],
                                'Entretenimiento'=>$row['entretenimiento'],
                                'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                    FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                    WHERE C.idUsuario = U.idUsuario
                    AND CP.idPreferencia = P.idPreferencia
                    AND CP.idCliente = C.idCliente
                    AND P.idPreferencia = Cul.idPreferencia
                    AND P.idPreferencia = A.idPreferencia
                    AND P.idPreferencia = E.idPreferencia "))
                    {
                        while ($row=$result->fetch_assoc()) 
                        {
                            $json[]=array(
                                'correo'=>$row['email'],
                                'cultural'=>$row['cultural'],
                                'Entretenimiento'=>$row['entretenimiento'],
                                'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                    FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                    WHERE C.idUsuario = U.idUsuario
                    AND CP.idPreferencia = P.idPreferencia
                    AND CP.idCliente = C.idCliente
                    AND P.idPreferencia = Cul.idPreferencia
                    AND P.idPreferencia = A.idPreferencia
                    AND P.idPreferencia = E.idPreferencia "))
                    {
                        while ($row=$result->fetch_assoc()) 
                        {
                            $json[]=array(
                                'correo'=>$row['email'],
                                'cultural'=>$row['cultural'],
                                'Entretenimiento'=>$row['entretenimiento'],
                                'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                    FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                    WHERE C.idUsuario = U.idUsuario
                    AND CP.idPreferencia = P.idPreferencia
                    AND CP.idCliente = C.idCliente
                    AND P.idPreferencia = Cul.idPreferencia
                    AND P.idPreferencia = A.idPreferencia
                    AND P.idPreferencia = E.idPreferencia "))
                    {
                        while ($row=$result->fetch_assoc()) 
                        {
                            $json[]=array(
                                'correo'=>$row['email'],
                                'cultural'=>$row['cultural'],
                                'Entretenimiento'=>$row['entretenimiento'],
                                'Acadenica'=>$row['academica']
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
        
        switch($culturales_musica){
            case "0":
            break;
            case "1":
            //    alert("Esta activo la preferencia de Musica");
                
                switch($musica_clasica){
                case "1":
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                    FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                    WHERE C.idUsuario = U.idUsuario
                    AND CP.idPreferencia = P.idPreferencia
                    AND CP.idCliente = C.idCliente
                    AND P.idPreferencia = Cul.idPreferencia
                    AND P.idPreferencia = A.idPreferencia
                    AND P.idPreferencia = E.idPreferencia "))
                    {
                        while ($row=$result->fetch_assoc()) 
                        {
                            $json[]=array(
                                'correo'=>$row['email'],
                                'cultural'=>$row['cultural'],
                                'Entretenimiento'=>$row['entretenimiento'],
                                'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                    FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                    WHERE C.idUsuario = U.idUsuario
                    AND CP.idPreferencia = P.idPreferencia
                    AND CP.idCliente = C.idCliente
                    AND P.idPreferencia = Cul.idPreferencia
                    AND P.idPreferencia = A.idPreferencia
                    AND P.idPreferencia = E.idPreferencia "))
                    {
                        while ($row=$result->fetch_assoc()) 
                        {
                            $json[]=array(
                                'correo'=>$row['email'],
                                'cultural'=>$row['cultural'],
                                'Entretenimiento'=>$row['entretenimiento'],
                                'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                    FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                    WHERE C.idUsuario = U.idUsuario
                    AND CP.idPreferencia = P.idPreferencia
                    AND CP.idCliente = C.idCliente
                    AND P.idPreferencia = Cul.idPreferencia
                    AND P.idPreferencia = A.idPreferencia
                    AND P.idPreferencia = E.idPreferencia "))
                    {
                        while ($row=$result->fetch_assoc()) 
                        {
                            $json[]=array(
                                'correo'=>$row['email'],
                                'cultural'=>$row['cultural'],
                                'Entretenimiento'=>$row['entretenimiento'],
                                'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                    FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                    WHERE C.idUsuario = U.idUsuario
                    AND CP.idPreferencia = P.idPreferencia
                    AND CP.idCliente = C.idCliente
                    AND P.idPreferencia = Cul.idPreferencia
                    AND P.idPreferencia = A.idPreferencia
                    AND P.idPreferencia = E.idPreferencia "))
                    {
                        while ($row=$result->fetch_assoc()) 
                        {
                            $json[]=array(
                                'correo'=>$row['email'],
                                'cultural'=>$row['cultural'],
                                'Entretenimiento'=>$row['entretenimiento'],
                                'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                    FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                    WHERE C.idUsuario = U.idUsuario
                    AND CP.idPreferencia = P.idPreferencia
                    AND CP.idCliente = C.idCliente
                    AND P.idPreferencia = Cul.idPreferencia
                    AND P.idPreferencia = A.idPreferencia
                    AND P.idPreferencia = E.idPreferencia "))
                    {
                        while ($row=$result->fetch_assoc()) 
                        {
                            $json[]=array(
                                'correo'=>$row['email'],
                                'cultural'=>$row['cultural'],
                                'Entretenimiento'=>$row['entretenimiento'],
                                'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                    FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                    WHERE C.idUsuario = U.idUsuario
                    AND CP.idPreferencia = P.idPreferencia
                    AND CP.idCliente = C.idCliente
                    AND P.idPreferencia = Cul.idPreferencia
                    AND P.idPreferencia = A.idPreferencia
                    AND P.idPreferencia = E.idPreferencia "))
                    {
                        while ($row=$result->fetch_assoc()) 
                        {
                            $json[]=array(
                                'correo'=>$row['email'],
                                'cultural'=>$row['cultural'],
                                'Entretenimiento'=>$row['entretenimiento'],
                                'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                    FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                    WHERE C.idUsuario = U.idUsuario
                    AND CP.idPreferencia = P.idPreferencia
                    AND CP.idCliente = C.idCliente
                    AND P.idPreferencia = Cul.idPreferencia
                    AND P.idPreferencia = A.idPreferencia
                    AND P.idPreferencia = E.idPreferencia "))
                    {
                        while ($row=$result->fetch_assoc()) 
                        {
                            $json[]=array(
                                'correo'=>$row['email'],
                                'cultural'=>$row['cultural'],
                                'Entretenimiento'=>$row['entretenimiento'],
                                'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                    FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                    WHERE C.idUsuario = U.idUsuario
                    AND CP.idPreferencia = P.idPreferencia
                    AND CP.idCliente = C.idCliente
                    AND P.idPreferencia = Cul.idPreferencia
                    AND P.idPreferencia = A.idPreferencia
                    AND P.idPreferencia = E.idPreferencia "))
                    {
                        while ($row=$result->fetch_assoc()) 
                        {
                            $json[]=array(
                                'correo'=>$row['email'],
                                'cultural'=>$row['cultural'],
                                'Entretenimiento'=>$row['entretenimiento'],
                                'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                   if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
                                );
                            }
                        }
                        $result->close();
                case "0":
                    break;
                }
                
                switch($barantro_show){
                case "1":
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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
                    if($result = $db->query("SELECT U.email, Cul.cultural, E.entretenimiento, A.academica
                        FROM Clientes AS C, Preferencias AS P, ClientesPreferencias AS CP, Cultural AS Cul, Entretenimiento AS E, Academica AS A, Usuarios AS U
                        WHERE C.idUsuario = U.idUsuario
                        AND CP.idPreferencia = P.idPreferencia
                        AND CP.idCliente = C.idCliente
                        AND P.idPreferencia = Cul.idPreferencia
                        AND P.idPreferencia = A.idPreferencia
                        AND P.idPreferencia = E.idPreferencia "))
                        {
                            while ($row=$result->fetch_assoc()) 
                            {
                                $json[]=array(
                                    'correo'=>$row['email'],
                                    'cultural'=>$row['cultural'],
                                    'Entretenimiento'=>$row['entretenimiento'],
                                    'Acadenica'=>$row['academica']
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