<?php

require_once 'FormaGeometrica.php';

class Quadrado extends FormaGeometrica {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return $this->lado * $this->lado;
    }

    public function calcularComprimento() {
        return 4 * $this->lado;
    }
}

?>
