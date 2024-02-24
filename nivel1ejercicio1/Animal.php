<?php
class Animal {
    public $nombre;

    function __contruct($nombre) {
        $this->nombre = $nombre;
    }

    function getNombre() {
        return $this->nombre;
    }
}
?>