<?php

    header("Content-Type: aplication/json");
    include_once("../clases/class-usuario.php");

    switch($_SERVER['REQUEST_METHOD']){
        case 'POST':
            $_POST = json_decode(file_get_contents('php://input'),true);
            $usuario = new Usuario($_POST["correo"], $_POST["contrasenia"], $_POST["edad"]);
            $usuario->guardarUsuario();
            $resultado["mensaje"] = "guardar el usuario con la informacion: ".json_encode($_POST);
            echo json_encode($resultado);
        break;
        case 'GET':
            if(isset($_GET['id'])){
                Usuario::obtenerUsuario($_GET['id']);
            }
            else{
                Usuario::obtenerUsuarios();
            } 
        break;
        case 'PUT':
            $_PUT = json_decode(file_get_contents('php://input'),true);
            $usuario = new Usuario($_PUT['correo'], $_PUT['contrasenia'], $_PUT['edad']);
            $usuario->actualizarUsuario($_GET['id']);
            $resultado["mensaje"] = "Actualizar el usuario con el id: ". $_GET['id']
                                    .", Se actualizara la informacion: ". json_encode($_PUT);
            echo json_encode($resultado);
        break;
        case 'DELETE':
            Usuario::eliminarUsuario($_GET['id']);
            $resultado["mensaje"] = "Eliminar el usuario con el id: ". $_GET['id'];
            echo json_encode($resultado);
        break;
    }
?>