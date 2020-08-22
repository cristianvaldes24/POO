<?php

class Usuario{

    private $correo;
    private $contrasenia;
    private $edad;

    public function __construct(
        $correo,
        $contrasenia,
        $edad
    ){
        $this->correo = $correo;
        $this->contrasenia = $contrasenia;
        $this->edad = $edad;
    }

    public function setCorreo($correo){
        $this->correo = correo;
        return $this->correo;
    }

    public function getCorreo(){
        return $this->correo;
    }

    public function setContrasenia($contrasenia){
        $this->contrasenia = $contrasenia;
        return $this;
    }

    public function getcontrasenia(){
        return $this->contrasenia;
    }

    public function setEdad($edad){
        $this->edad = $edad;
        return $this;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function __toString(){
        return $this->correo ." ".$this->contrasenia." ".$this->edad;
    }

//CRUD
    public function guardarUsuario(){
        $contenidoArchivo = file_get_contents("../data/usuarios.json"); 
        $usuarios = json_decode($contenidoArchivo, true);
        $usuarios[] = array (
                    "correo"=> $this->correo,
                    "contrasenia"=> $this->contrasenia,
                    "edad"=> $this->edad
        );
        $archivo = fopen("../data/usuarios.json","w");
        fwrite($archivo,json_encode($usuarios));
        fclose($archivo);
    }
    
    public static function obtenerUsuario($indice){
        $contenidoArchivo = file_get_contents("../data/usuarios.json"); 
        $usuarios = json_decode($contenidoArchivo, true);
        echo json_encode($usuarios[$indice]);
    }
    
    public static function obtenerUsuarios(){
        $contenidoArchivo = file_get_contents("../data/usuarios.json"); 
        echo $contenidoArchivo;
    }

    public function actualizarUsuario($indice){
        $contenidoArchivo = file_get_contents("../data/usuarios.json"); 
        $usuarios = json_decode($contenidoArchivo, true);
        $usuario = $usuarios[$indice];
        $usuario = array(
                'correo'=> $this->correo,
                'contrasenia'=> $this->contrasenia,
                'edad'=> $this->edad
        );
        $usuarios[$indice] = $usuario;
        $archivo = fopen('../data/usuarios.json','w');
        fwrite($archivo, json_encode($usuarios));
        fclose($archivo);
    }
    public static function eliminarUsuario($indice){
        $contenidoArchivo = file_get_contents("../data/usuarios.json");
        $usuarios = json_decode($contenidoArchivo, true);
        array_splice($usuarios, $indice, 1);
        $archivo = fopen('../data/usuarios.json','w');
        fwrite($archivo, json_encode($usuarios));
        fclose($archivo);
    }
}

?>