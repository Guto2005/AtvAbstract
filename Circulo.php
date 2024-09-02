<?php

require_once 'FormaGeometrica.php';

class Circulo extends FormaGeometrica {
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function calcularArea() {
        return pi() * $this->raio * $this->raio;
    }

    public function calcularComprimento() {
        return 2 * pi() * $this->raio;
    }
}

?>
