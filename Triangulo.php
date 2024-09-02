<?php

require_once 'FormaGeometrica.php';

class Triangulo extends FormaGeometrica {
    private $base;
    private $altura;
    private $lado1;
    private $lado2;

    public function __construct($base, $altura, $lado1, $lado2) {
        $this->base = $base;
        $this->altura = $altura;
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
    }

    public function calcularArea() {
        return 0.5 * $this->base * $this->altura;
    }

    public function calcularComprimento() {
        return $this->base + $this->lado1 + $this->lado2;
    }
}

?>
