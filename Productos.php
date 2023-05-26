<?php
    class Productos {
        private  $nombre;
        private  $precio;
        private  $estado;
        private  $stock;

        public function __construct($nombre,$precio,$estado,$stock) {
            $this->nombre =$nombre;
            $this->precio = $precio;
            $this->estado = $estado;
            $this->stock = $stock;

        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function getPrecio(){
            return $this->precio;
        }
        public function setPrecio($precio){
            $this->precio = $precio;
        }
        public function getEstado(){
            return $this->estado;
        }
        public function setEstado ($estado){
            $this->estado = $estado;
        }
        public function getStock (){
            return $this->stock;
        }
        public function setStock($stock){
            $this->stock = $stock;
        }

    }
?>
