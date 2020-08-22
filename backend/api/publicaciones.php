<?php
    header("contentType: aplication/json");
    include_once("../clases/class-publicacion.php");
    switch ($_SERVER['REQUEST_METHOD']){
        case 'GET':
            Publicacion::obtenerPublicaciones();
        break;
    }
?>