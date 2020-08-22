<?php
    class Publicacion{
        private $codigo;
        private $nombre;
        private $url;

        public function __construct(
        $codigo,
        $nombre,
        $url)
        {
            $this->codigo = $codigo;
            $this->nombre = $nombre;
            $this->url = $url;
        }
        
        public static function obtenerPublicaciones()
        {
            $contenidoArchivo = file_get_contents("../data/publicacion.json");
            echo $contenidoArchivo;
        }

        /**
         * Get the value of codigo
         */ 
        public function getCodigo()
        {
                return $this->codigo;
        }

        /**
         * Set the value of codigo
         *
         * @return  self
         */ 
        public function setCodigo($codigo)
        {
                $this->codigo = $codigo;

                return $this;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of url
         */ 
        public function getUrl()
        {
                return $this->url;
        }

        /**
         * Set the value of url
         *
         * @return  self
         */ 
        public function setUrl($url)
        {
                $this->url = $url;

                return $this;
        }
    }
?>